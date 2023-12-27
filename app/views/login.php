<?php
require $_SERVER['DOCUMENT_ROOT'].'/tschuyen/app/config/services.php';

$login_url = $client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/header.php')?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="<?=BASE_URL?>admin" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>HUS</h3>
                            </a>
                            <h3>Đăng nhập</h3>
                        </div>
                        <?php if (!empty($_GET['mess'])){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            <?php 
                                $mess = unserialize(urldecode($_GET['mess'])); 
                                foreach ($mess as $key => $value) {
                                    echo $value;
                                }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>
                        <?php if (!empty($_GET['add_success'])){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            <?php 
                                $mess = unserialize(urldecode($_GET['error'])); 
                                foreach ($mess as $key => $value) {
                                    echo $value;
                                }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>
                        <form action="<?=BASE_URL?>auth/login" method="POST" name="login">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password">
                                <label for="floatingPassword">Mật khẩu</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                    <label class="form-check-label" for="exampleCheck1">Ghi nhớ mật khẩu</label>
                                </div>
                                <a href="<?=BASE_URL?>auth/forgot">Quên mật khẩu</a>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name='login'>Đăng
                                nhập</button>
                            <p class="text-center mb-0">Bạn đã có tài khoản chưa? <a
                                    href="<?=BASE_URL?>auth/register">Đăng ký</a></p>
                            <hr>
                        </form>
                        <a href="<?=$login_url?>">
                            <button><img src="<?= BASE_URL."public/image/icons8-google.svg"?>"></button>
                        </>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/script.php')?>
</body>

</html>