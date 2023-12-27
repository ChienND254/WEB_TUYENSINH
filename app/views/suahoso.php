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
                            <h3 class="mb-4 text-center text-primary">Sửa thông tin cá nhân</h3>
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
                            <form action="<?=BASE_URL?>hoso/fix" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name"
                                        value="<?= $data['ts']['name']?>">
                                    <label for="floatingInput">Họ và Tên</label>
                                </div>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Giới tính:</legend>
                                    <div class="col-sm-10">
                                        <?php
                                            if ($data['ts']['gt'] == '1') {
                                        ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gt" id="gridRadios1"
                                                value="1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Nam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gt" id="gridRadios2"
                                                value="0">
                                            <label class="form-check-label" for="gridRadios2">
                                                Nữ
                                            </label>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gt" id="gridRadios1"
                                                value="1">
                                            <label class="form-check-label" for="gridRadios1">
                                                Nam
                                            </label>
                                        </div>  
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gt" id="gridRadios2"
                                                value="0" checked>
                                            <label class="form-check-label" for="gridRadios2">
                                                Nữ
                                            </label>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </fieldset>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" name="ns" value='<?=$data['ts']['ns']?>'>
                                    <label for="floatingInput">Ngày sinh</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="dt">
                                        <option value="" selected>Chọn...</option>
                                        <?php
                                            foreach($data['dt'] as $key => $value) { 
                                        ?>
                                        <option value="<?=$value['id']?>"><?=$value["tendt"]?>
                                        </option>
                                        <?php }?>
                                    </select>
                                    <label for="floatingSelect">Dân tộc</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="tinhns" required>
                                        <option value="" selected>Chọn...</option>
                                        <?php
                                            foreach($data['tinh'] as $key => $value) { 
                                        ?>
                                        <option value="<?=$value["ma"]?>"><?=$value["ten"]?>
                                        </option>
                                        <?php }?>
                                    </select>
                                    <label for="floatingSelect">Nơi sinh</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="tinh" name="tinh" required>
                                        <option value="" selected>Chọn...</option>
                                        <?php
                                            foreach($data['tinh'] as $key => $value) {
                                            ?>
                                        <option value="<?=$value["ma"]?>"><?=$value["ten"]?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                    <label for="floatingSelect">Đang học tại tỉnh/thành phố</label>
                                </div>
                                <div class="form-floating mb-3 ">
                                    <select class="form-select" id="huyen" name="huyen">
                                        <option value="" selected>Chọn...</option>
                                    </select>
                                    <label for="floatingSelect">Quận/huyện</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="xathcs" value="<?=$data['ts']['xathcs']?>">
                                    <label for="floatingInput">Xã/Phường</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="thcs" value="<?=$data['ts']['thcs']?>">
                                    <label for="floatingInput">Trường THCS:</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Nhập</button>
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