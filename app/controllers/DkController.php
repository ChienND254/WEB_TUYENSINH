<?php
class DkController extends DController{
    function __construct() {
        parent::__construct();
        
    }
    function index() {
        Session::init();
        if (Session::get('login') == true|| isset($_COOKIE["remember"])) {
            header("Location:".BASE_URL."index");
        } else {
            header("Location:".BASE_URL."auth");
        }     
    }
    function dangkynv() {
        ob_start(); 
        Session::init();
        if (Session::get('login') == true || isset($_COOKIE["remember"])) {
            $dkModel = $this->load->model("DkModel");
            $hosoModel = $this->load->model("HosoModel");
            $data['tinh'] = $dkModel->danhsachtinh();
            $this->load->view('dknv', $data);
            if(isset($_POST["ma"])){ 
                $huyen = $hosoModel->danhsachhuyen($_POST['ma']);
                foreach($huyen as $key => $value ) {
                    echo '<option value="'.$value['ma'].'">'.$value['ten'].'</option>';
                }
            }
        } else {
            header("Location:".BASE_URL."auth");
        }
        ob_end_flush();
    }
    function dknv() {
        ob_start();
        if (!isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] !== 'POST'){
            die;
        }  
        if (!isset($_FILES["imagets"])){
            echo "Dữ liệu không đúng cấu trúc";
            die;
        }
        if ($_FILES["imagets"]['error'] != 0){
            echo "Dữ liệu upload bị lỗi";
            die;
        }
        Session::init();
        $dkModel = $this->load->model("DkModel");
        $hoso = $dkModel->ts();
        $path_upload = "public/uploads/";
        $target_file = $path_upload.$_FILES["imagets"]["name"];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $name_img = $hoso['shs'].'.'.$imageFileType;
        $file_upload = $path_upload.$name_img;
        $tmp_image= $_FILES['imagets']['tmp_name'];
        $allowUpload = true;
        $allowtypes = array('jpg', 'png', 'jpeg');
        $maxfilesize = 800000;
        $check = getimagesize($_FILES["imagets"]["tmp_name"]);
        if($check == false){
            $message['upload_fail'] = "Không phải file ảnh";
            header("Location:".BASE_URL."dk/dangkynv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if ($_FILES["imagets"]["size"] > $maxfilesize) {
            $message['upload_fail'] = "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            header("Location:".BASE_URL."dk/dangkynv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if (!in_array($imageFileType,$allowtypes)){
            $message['upload_fail'] = "Chỉ được upload các định dạng JPG, PNG, JPEG";
            header("Location:".BASE_URL."dk/dangkynv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if ($allowUpload) {
            if (move_uploaded_file($_FILES['imagets']['tmp_name'], $file_upload)) {
            }else{
                $message['upload_fail'] = "Có lỗi xảy ra khi upload file.";
                header("Location:".BASE_URL."dk/dangkynv?upload_fail=".urldecode(serialize($message)));
            }
        }else{
            $message['upload_fail'] = "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
            header("Location:".BASE_URL."dk/dangkynv?upload_fail=".urldecode(serialize($message)));
        }
        
        $result = $dkModel -> dknv($_POST['nv1'], $_POST['tinhll'],$_POST['huyenll'],$_POST['xall'],$_POST['diachill'], $_POST['tel'], $name_img);
        if ($result == 1) {
            $message['update_success'] = "ĐĂNG KÍ THÀNH CÔNG";
            header("Location:".BASE_URL."dk/dangkynv?add_success=".urldecode(serialize($message)));
        } else {
            $message['update_fail'] = "ĐĂNG KÍ THẤT BẠI THẤT BẠI";
            header("Location:".BASE_URL."dk/dangkynv?add_fail=".urldecode(serialize($message)));
        }
        ob_end_flush();
    }
    function suanv() {
        Session::init();
        if (Session::get('login') == true && isset($_SESSION['id'])) {
            $dkModel = $this->load->model("DkModel");
            $data['ts'] = $dkModel->ts();
            $data['tinh'] = $dkModel->danhsachtinh();
            // $data['huyen'] = $hosoModel->danhsachhuyen();
            $this->load->view('suanv', $data);
        } else {
            header("Location:".BASE_URL."auth");
        }
    }
    function fix() {

        if (!isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] !== 'POST'){
            die;
        }  
        if (!isset($_FILES["imagets"])){
            echo "Dữ liệu không đúng cấu trúc";
            die;
        }
        if ($_FILES["imagets"]['error'] != 0){
            echo "Dữ liệu upload bị lỗi";
            die;
        }
        Session::init();
        $dkModel = $this->load->model("DkModel");
        $hoso = $dkModel->ts();
        $path_upload = "public/uploads/";
        $target_file = $path_upload.$_FILES["imagets"]["name"];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $name_img = $hoso['shs'].'.'.$imageFileType;
        $file_upload = $path_upload.$name_img;
        $tmp_image= $_FILES['imagets']['tmp_name'];
        $allowUpload = true;
        $allowtypes = array('jpg', 'png', 'jpeg');
        $maxfilesize = 3000000;
        $check = getimagesize($_FILES["imagets"]["tmp_name"]);
        if($check == false){
            $message['upload_fail'] = "Không phải file ảnh";
            header("Location:".BASE_URL."dk/suanv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if ($_FILES["imagets"]["size"] > $maxfilesize) {
            $message['upload_fail'] = "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            header("Location:".BASE_URL."dk/suanv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if (!in_array($imageFileType,$allowtypes)){
            $message['upload_fail'] = "Chỉ được upload các định dạng JPG, PNG, JPEG";
            header("Location:".BASE_URL."dk/suanv?upload_fail=".urldecode(serialize($message)));
            $allowUpload = false;
        }
        if ($allowUpload) {
            if (move_uploaded_file($_FILES['imagets']['tmp_name'], $file_upload)) {
            }else{
                $message['upload_fail'] = "Có lỗi xảy ra khi upload file.";
                header("Location:".BASE_URL."dk/suanv?upload_fail=".urldecode(serialize($message)));
            }
        }else{
            $message['upload_fail'] = "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
            header("Location:".BASE_URL."dk/suanv?upload_fail=".urldecode(serialize($message)));
        }
        
        $result = $dkModel -> dknv($_POST['nv1'], $_POST['tinhll'],$_POST['huyenll'],$_POST['xall'],$_POST['diachill'], $_POST['tel'], $name_img);
        if ($result == 1) {
            $message['update_success'] = "SỬA NV THÀNH CÔNG";
            header("Location:".BASE_URL."dk/suanv?add_success=".urldecode(serialize($message)));
        } else {
            $message['update_fail'] = "SỬA NV THẤT BẠI";
            header("Location:".BASE_URL."dk/suanv?add_fail=".urldecode(serialize($message)));
        }
        ob_end_flush();
    }
}
?>