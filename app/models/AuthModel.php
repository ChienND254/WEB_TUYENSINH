<?php
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/OAuthTokenProvider.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/OAuth.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/PHPMailer-master/src/POP3.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    class AuthModel extends DModel{
        public function __construct() {
            parent::__construct();
        }
        function find_user_by_gmail($email) {
            $table = 'users';
            $data = [
                'email' => $email
            ];
            return $this->db->read("*", $table, $data);
        }
        function login($email, $password) {
            $column = "*";
            $table = 'users';
            $data = [
                'email' => $email
            ];
            $user = $this->db->read($column,$table, $data);
            
            if ($user && md5($password) == $user['password'] && $user['active'] == '1') {
                Session::init();
                Session::set('login',true);
                Session::set('username',$user['username']);
                Session::set('email',$user['email']);
                Session::set('id',$user['id']);       
                return $user;
            }
        }
        function update_user($email) {
            $sql = 'UPDATE users SET active = ? Where email = ?';
            $statement = $this->db->prepare($sql);
            $statement->execute(['1', $email]);
            
            return true;
        }
        function register($email, $username, $password, $token) {
            $table = 'users';
            $mail = new PHPMailer(true);//true:enables exceptions
            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'ndchien25402@gmail.com'; // SMTP username
                $mail->Password = 'dbeyosyeqvcaeanf';   // SMTP password
                $mail->SMTPSecure = 'tls';  // encryption TLS/SSL 
                $mail->Port = 587;  // port to connect to                
                $mail->setFrom('ndchien25402@gmail.com', 'chien' ); 
                $mail->addAddress($email); 
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = "Xac thuc dang ky";
                $content = 'Kich vao duong link kich hoat: '.BASE_URL.'auth/xacthucdangky/?token='.$token.'&email='.$email; 
                $mail->Body = $content;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
            } catch (Exception $e) {
                echo 'Error: ', $mail->ErrorInfo;
            }
            $data = [
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'token' => $token,
                'active' => '0'
            ];
            return $this->db->create($table, $data);
        }
        function forgot_password($user) {   
            $new_password = substr(md5(rand(0,999999)),0,8);
            $mail = new PHPMailer(true);//true:enables exceptions
            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'ndchien25402@gmail.com'; // SMTP username
                $mail->Password = 'dbeyosyeqvcaeanf';   // SMTP password
                $mail->SMTPSecure = 'tls';  // encryption TLS/SSL 
                $mail->Port = 587;  // port to connect to                
                $mail->setFrom('ndchien25402@gmail.com', 'chien' ); 
                $mail->addAddress($user['email']); 
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = 'Mat khau moi';
                $content = $new_password; 
                $mail->Body = $content;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
            } catch (Exception $e) {
                echo 'Error: ', $mail->ErrorInfo;
            }
            $sql = 'UPDATE users SET password = ? Where email = ?';
            $statement = $this->db->prepare($sql);
            $statement->execute([md5($new_password), $user['email']]);
            return true;
        }
    }