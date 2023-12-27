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
                            <h3>Sign Up</h3>
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
                        <?php if (!empty($_GET['register_success'])){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            <?php 
                                $mess = unserialize(urldecode($_GET['register_success'])); 
                                foreach ($mess as $key => $value) {
                                    echo $value;
                                }
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php } ?>
                        <form action="<?=BASE_URL?>auth/register_user" method="POST" name="register">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="jhondoe"
                                    name="username" required>
                                <label for="floatingText">Tên người dùng</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="name@example.com" name="email"  required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password"  required>
                                <label for="floatingPassword">Mật khẩu</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    name="password_repeat" required>
                                <label for="floatingPassword">Nhập lại mật khẩu</label>
                            </div>
                            <button name="register" type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng ký</button>
                            <p class="text-center mb-0">Đã có tài khoản? <a href="<?=BASE_URL?>auth">Đăng nhập</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>