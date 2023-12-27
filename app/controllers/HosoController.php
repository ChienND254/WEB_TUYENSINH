<?php
class HosoController extends DController{
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
    function capnhathoso() {
        Session::init();
        if (Session::get('login') == true || isset($_COOKIE["remember"])) {
            // $username = Session::get('username');
           
            $hosoModel = $this->load->model("HosoModel");
            $data['tinh'] = $hosoModel->danhsachtinh();
            $data['dt'] = $hosoModel->danhsachdt();
            $this->load->view('capnhathoso', $data);
            if(isset($_POST["ma"])){ 
                $huyen = $hosoModel->danhsachhuyen($_POST['ma']);
                foreach($huyen as $key => $value ) {
                    echo '<option value="'.$value['ma'].'">'.$value['ten'].'</option>';
                }
            }
        } else {
            header("Location:".BASE_URL."auth");
        }          
    }
    function themhoso() {
        $name = $_POST['name'];
        $gt = $_POST['gt'];
        $ns = $_POST['ns'];
        $dt = $_POST['dt'];
        $tinhns = $_POST['tinhns'];
        $tinhthcs = $_POST['tinh'];
        $huyenthcs = $_POST['huyen'];
        $xathcs = $_POST['xathcs'];
        $thcs = $_POST['thcs'];
        $hosoModel = $this->load->model("HosoModel");
        $result = $hosoModel -> themhoso($name, $gt, $ns, $dt, $tinhns, $tinhthcs, $huyenthcs, $xathcs, $thcs);
        if ($result == 1) {
            
            $message['update_success'] = "THÊM THÀNH CÔNG";
            header("Location:".BASE_URL."hoso/capnhathoso?add_success=".urldecode(serialize($message)));
        } else {
            $message['update_fail'] = "THÊM THẤT BẠI";
            header("Location:".BASE_URL."hoso/capnhathoso?add_fail=".urldecode(serialize($message)));
        }
    }
    function suahoso() {
        Session::init();
        if (Session::get('login') == true && isset($_SESSION['id'])) {

            $hosoModel = $this->load->model("HosoModel");
            $data['ts'] = $hosoModel->ts();
            $data['tinh'] = $hosoModel->danhsachtinh();
            $data['dt'] = $hosoModel->danhsachdt();
            // $data['huyen'] = $hosoModel->danhsachhuyen();
            $this->load->view('suahoso', $data);
        } else {
            header("Location:".BASE_URL."auth");
        }
    }
    function fix() {
        $name = $_POST['name'];
        $gt = $_POST['gt'];
        $ns = $_POST['ns'];
        $dt = $_POST['dt'];
        $tinhns = $_POST['tinhns'];
        $tinhthcs = $_POST['tinh'];
        $huyenthcs = $_POST['huyen'];
        $xathcs = $_POST['xathcs'];
        $thcs = $_POST['thcs'];
        $hosoModel = $this->load->model("HosoModel");
        $result = $hosoModel -> suahoso($name, $gt, $ns, $dt, $tinhns, $tinhthcs, $huyenthcs, $xathcs, $thcs);
        if ($result == 1) {
            $message['update_success'] = "SỬA THÀNH CÔNG";
            header("Location:".BASE_URL."hoso/suahoso?add_success=".urldecode(serialize($message)));
        } else {
            $message['update_fail'] = "SỬA THẤT BẠI";
            header("Location:".BASE_URL."hoso/suahoso?add_fail=".urldecode(serialize($message)));
        }
    }
        // $image_product = $_FILES['image_product']['name'];
        
        // $desc_product = $_POST['desc_product'];
        // $category = $_POST['category_product'];
        
        // $tmp_image_product = $_FILES['image_product']['tmp_name'];
        // $div = explode('.',$image_product);
        // $file_ext = strtolower(end($div));
        // $unique_image = $div[0].time().".".$file_ext;
        // $path_upload = "public/uploads/product/".$unique_image;
        // $data = array(
        //     'title_product' => $title_product,
        //     'price_product' => $price_product,
        //     'quantity_product' => $quantity_product,
        //     'image_product' => $unique_image,
        //     'desc_product' => $desc_product,
        //     'id_category_product' => $category
        // );
        // $productModel = $this->load->model("ProductModel");
        // $table = 'tbl_product';
        
        // $result = $productModel -> add_product($table,$data);
        // move_uploaded_file($tmp_image_product,$path_upload);
    // function fix() {
    //     $hosoModel = $this->load->model("hosoModel");

    //     $name = $_POST['name'];
    //     $price_product = $_POST['price_product'];
    //     $quantity_product = $_POST['quantity_product'];
    
    //     $desc_product = $_POST['desc_product'];
    //     $category = $_POST['category_product'];
        
    //     $image_product = $_FILES['image_product']['name'];
    //     $tmp_image_product = $_FILES['image_product']['tmp_name'];
    //     $div = explode('.',$image_product);
    //     $file_ext = strtolower(end($div));
    //     $unique_image = $div[0].time().".".$file_ext;
    //     $path_upload = "public/uploads/product/".$unique_image;
    //     $data = NULL;
    //     if ($image_product) {
    //         move_uploaded_file($tmp_image_product,$path_upload);
    //         $data = array(
    //             'title_product' => $title_product,
    //             'price_product' => $price_product,
    //             'quantity_product' => $quantity_product,
    //             'image_product' => $unique_image,
    //             'desc_product' => $desc_product,
    //             'id_category_product' => $category
    //         );
            
    //         $result_product = $productModel->product_id($column,$table_product, $condition);
    //         foreach ($result_product as $key => $value) {
    //             $path_unlink = "public/uploads/product/";
    //             unlink($path_unlink.$value['image_product']);
    //         }
    //     } else {
    //         $data = array(
    //             'title_product' => $title_product,
    //             'price_product' => $price_product,
    //             'quantity_product' => $quantity_product,
    //             'desc_product' => $desc_product,
    //             'id_category_product' => $category
    //         );
    //     }
    //     $condition_product = "tbl_product.id_product=$id";   
    //     $result = $productModel -> update_product($table_product,$data,$condition_product);
    //     if ($result == TRUE) {
    //         $message['update_success'] = "CẬP NHẬT THÀNH CÔNG";
    //         header("Location:".BASE_URL."product/listProduct?update_success=".urldecode(serialize($message)));
    //     } else {
    //         $message['update_fail'] = "CẬP NHẬT THẤT BẠI";
    //         header("Location:".BASE_URL."product/listProduct?update_fail=".urldecode(serialize($message)));
    //     }
    // }
}
?>