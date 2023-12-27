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
                            <h3 class="mb-4 text-center text-primary">Sửa đăng ký nguyện vọng</h3>
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
                            <form action="<?=BASE_URL?>dk/fix" method="POST" enctype="multipart/form-data"
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
                                    <input id="imgInp" type="file" class="form-control" name="imagets" accept="image/*"
                                        onchange="loadFile(event)" required>
                                    <img id="imagets" src="<?=BASE_URL?>public/uploads/<?=$data['ts']['img']?>"
                                        height="226" weight="151">
                                    <label for="floatingPassword">Bấm vào đây để tải ảnh chân dung 4cmx6cm</label>

                                </div>
                                <fieldset class="radio_options row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Nguyện vọng 1:</legend>
                                    <div id="nv" class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios1"
                                                value="H" <?= $data['ts']['nv1'] == 'H' ? "checked" :""?>>
                                            <label class="form-check-label" for="gridRadios1">Hóa</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios2"
                                                value="I" <?= $data['ts']['nv1'] == 'I' ? "checked" :""?>>
                                            <label class="form-check-label" for="gridRadios2">Tin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios3"
                                                value="L" <?= $data['ts']['nv1'] == 'L' ? "checked" :""?>>
                                            <label class="form-check-label" for="gridRadios2"> Lý </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios4"
                                                value="S" <?= $data['ts']['nv1'] == 'S' ? "checked" :""?>>
                                            <label class="form-check-label" for="gridRadios2">Sinh</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="nv1" id="gridRadios5"
                                                value="T" <?= $data['ts']['nv1'] == 'T' ? "checked" :""?>>
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
                                    <input type="text" class="form-control" id="floatingInput" name="xall" value="<?=$data['ts']['xall']?>">
                                    <label for="floatingInput">Xã/Phường</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="diachill" value="<?=$data['ts']['diachill']?>">
                                    <label for="floatingInput">Thôn/Xóm/Số nhà, ngõ, phố:</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="tel" value="<?=$data['ts']['tel']?>">
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
</body>

</html>