
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/header.php') ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="/" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>HUS</h3>
                            </a>
                            <h3>Quên mật khẩu</h3>
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
                        <form name="form_sign_in" action="<?=BASE_URL?>auth/forgot_password" method="post">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput">
                                <label for="floatingInput">Email</label>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('include/scripts.php');
    ?>
</body>

</html>