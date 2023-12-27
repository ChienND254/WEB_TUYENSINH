<?php
    class AuthController extends DController{
        function __construct() {
            parent::__construct();         
        }
        function index() {
            Session::init();
            require $_SERVER['DOCUMENT_ROOT'].'/tschuyen/app/config/services.php';
            if (Session::get('login') == true || isset($_COOKIE["remember"]) == true || Session::get('token') == true) {
                $this->load->view('home');
            } else {
                $this->load->view('login');
            }     
        }
        function login() {
            $email = NULL;
            $password = NULL;
            $remember = NULL;
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                
            }
            if (isset($_POST['remember'])) {
                setcookie("remember", $email, time() + 3600);
            }
            $authModel = $this->load->model('AuthModel');       
            $user = $authModel->login($email,$password);
            if ($remember != NULL) {             
                $authModel -> set_cookie($_POST['email']);
            }
            if ($user) {
                header("Location:".BASE_URL."index");
            } else {
                $mess['login'] = 'Invalid email or password';
                header("Location:".BASE_URL."auth?mess=".urldecode(serialize($mess)));
            }
        }
        function logout() {
            require $_SERVER['DOCUMENT_ROOT'].'/app/config/services.php';
            Session::init();

            Session::destroy();
            
            if (isset($_COOKIE['remember'])) {
                unset($_COOKIE['remember']);
                setcookie('remember', null, -1);
            }
            header("Location:".BASE_URL."auth");
        }
        function register() {    
            $this->load->view('register');                
        }
        function register_user() {
            $email = NULL;
            $password = NULL;
            $username = NULL;
            $password_repeat = NULL;
            $token = bin2hex(random_bytes(16));
            if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_repeat'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password_repeat = $_POST['password_repeat'];
            }
            if ($password != $password_repeat) {
                $mess['register'] = 'mật khẩu và nhập lại mật khẩu không giống nhau';
                header("Location:".BASE_URL."auth/register?mess=".urldecode(serialize($mess)));
            }
            $authModel = $this->load->model('AuthModel');  
            $user = $authModel->find_user_by_gmail($email);
            if ($user) {
                $mess['register'] = 'Tài khoản gmail tồn tại';
                header("Location:".BASE_URL."auth/register?mess=".urldecode(serialize($mess)));
            } else {
                $authModel->register($email,$username,md5($password), $token);       
                if ($authModel == true) {
                    $mess['register'] = 'Đăng ký thành công';
                    header("Location:".BASE_URL."auth/register?register_success=".urldecode(serialize($mess)));
                }
            }          
        }
        function login_with_google(){
            require $_SERVER['DOCUMENT_ROOT'].'/app/config/services.php';
            $login_url = $client->createAuthUrl();
            if (isset($_GET['code'])){
            
              session_start();
              $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
              if(isset($token['error'])){
                header('Location: login.php');
                exit;
              }
              $_SESSION['token'] = $token;
              header('Location: IndexController.php');
              exit;
            
            }
        }
        function forgot() {
            $this->load->view('forgot_password');
        }
        function forgot_password(){
            if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
                die;
            }
            $email = NULL;
           
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }
            $authModel = $this->load->model('AuthModel');  
            $user = $authModel->find_user_by_gmail($email);
            if ($user) {
                $result = $authModel->forgot_password($user);
                header("Location:".BASE_URL."auth");
            } else {
                $mess['mess'] = 'Tài khoản gmail chưa tồn tại';
                header("Location:".BASE_URL."auth/forgot?mess=".urldecode(serialize($mess)));
            }
            
        }
        
        function xacthucdangky() {
            $email = NULL;
            $token = NULL;
            if(isset($_GET['email']) && isset($_GET['token'])) {
                $token = $_GET['token'];
                $email = $_GET['email'];
            }
            $authModel = $this->load->model('AuthModel');  
            $user = $authModel->find_user_by_gmail($email);
            $users = $authModel->update_user($email);
            if ($user) {
                $mess['mess'] = 'Kích hoạt thành công';
                header("Location:".BASE_URL."auth/register?mess=".urldecode(serialize($mess)));
            }
        }
        function notFound() {
            $this->load->view('404');
        }
}
    ?>