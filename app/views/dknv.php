<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/header.php')?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php include('include/sidebar.php')?>
        <div class="content">
            <?php include('include/navbar.php')?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded p-4">
                            <h3 class="mb-4 text-center text-primary">Đăng ký nguyện vọng</h3>
                            <?php if (!empty($_GET['add_fail'])){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>
                                <?php 
                                    $mess = unserialize(urldecode($_GET['add_fail'])); 
                                    foreach ($mess as $key => $value) {
                                        echo $value;
                                    }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php } ?>
                            <?php if (!empty($_GET['add_success'])){ ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>
                                <?php 
                                    $mess = unserialize(urldecode($_GET['add_success'])); 
                                    foreach ($mess as $key => $value) {
                                        echo $value;
                                    }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <?php } ?>
                            <form action="<?=BASE_URL?>dk/dknv" method="POST" enctype="multipart/form-data"
                                runat="server">
                                <div id="image" class="form-floating mb-3">
                                    <?php if (!empty($_GET['upload_fail'])){ ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="fa fa-exclamation-circle me-2"></i>
                                        <?php 
                                    $mess = unserialize(urldecode($_GET['upload_fail'])); 
                                    foreach ($mess as $key => $value) {
                                        echo $value;
                                    }
                                    ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                    <?php } ?>
                                    <input id="imgInp" type="file" class="form-control" name="imagets"
                                        accept="image/*" onchange="loadFile(event)" required>
                                    <img id="imagets" src="<?=BASE_URL?>public/uploads/default4_6.jpg" height="151"
                                        weight="113">
                                    <label for="floatingPassword">Bấm vào đây để tải ảnh chân dung 3cmx4cm</label>

                                </div>
                                <fieldset class="radio_options row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Nguyện vọng 1:</legend>
                                    <div id="nv" class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios1"
                                                value="H">
                                            <label class="form-check-label" for="gridRadios1">Hóa</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios2"
                                                value="I">
                                            <label class="form-check-label" for="gridRadios2">Tin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios3"
                                                value="L">
                                            <label class="form-check-label" for="gridRadios2"> Lý </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios4"
                                                value="S">
                                            <label class="form-check-label" for="gridRadios2">Sinh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios5"
                                                value="T">
                                            <label class="form-check-label" for="gridRadios2">Toán</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="tinh" name="tinhll" required>
                                        <option value="" selected>Chọn...
                                            <?php
                                            foreach($data['tinh'] as $key => $value) {
                                            ?>
                                        <option value="<?=$value["ma"]?>"><?=$value["ten"]?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Tỉnh/TP:</label>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <select class="form-select" id="huyen" name="huyenll">
                                        <option value="" selected>Chọn...</option>
                                    </select>
                                    <label for="floatingSelect">Quận/huyện</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="xall">
                                    <label for="floatingInput">Xã/Phường</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="diachill">
                                    <label for="floatingInput">Thôn/Xóm/Số nhà, ngõ, phố:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="tel">
                                    <label for="floatingInput">Điện thoại</label>
                                </div>

                                <button type="submit" class="btn btn-primary" name="submit">Nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/script.php')?>
    <script>
    $(document).ready(function() {
        $('#tinh').on('change', function() {
            var ma = $(this).val();
            if (ma) {
                $.ajax({
                    type: 'POST',
                    url: '<?=BASE_URL?>hoso/capnhathoso',
                    data: 'ma=' + ma,
                    success: function(html) {
                        $('#huyen').html(html);
                    }
                });
            } else {
                $('#huyen').html('<option value="">Chọn...</option>');
            }
        });
    });
    </script>
    <script>
    var loadFile = function(event) {
        var image = document.getElementById('imagets');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.onload = function() {
            URL.revokeObjectURL(image.src) // free memory
        }
    };
    </script>
</body>

</html>