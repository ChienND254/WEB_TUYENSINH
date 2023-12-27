<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="<?=BASE_URL?>admin/dashboard" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>HUS</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?=BASE_URL?>public/template/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"></h6>
                <span>HUS</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="<?=BASE_URL?>index" class="nav-item nav-link"><i class="bi bi-house"></i>Trang chủ</a>
            <div class="nav-item dropdown">
                <a href="<?=BASE_URL?>hoso" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person"></i>Hồ sơ</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?=BASE_URL?>hoso/capnhathoso" class="dropdown-item">Cập nhật hồ sơ cá nhân</a>
                    <a href="<?=BASE_URL?>hoso/suahoso" class="dropdown-item">Sửa hồ sơ cá nhân</a>
                    <!-- <a href="element.html" class="dropdown-item">Other=" Elements</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="<?=BASE_URL?>dknv" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person"></i>Nguyện vọng</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?=BASE_URL?>dk/dangkynv" class="dropdown-item">Đăng ký nguyện vọng</a>
                    <a href="<?=BASE_URL?>dk/suanv" class="dropdown-item">Sửa nguyện vọng</a>
                    <!-- <a href="element.html" class="dropdown-item">Other Elements</a> -->
                </div>
            </div>
            <a href="<?=BASE_URL?>print" target="_blank" class="nav-item nav-link"><i class="bi bi-printer"></i>In giấy đăng ký dự thi</a>
            <a href="<?=BASE_URL?>thanhtoan" class="nav-item nav-link"><i class="bi bi-house"></i>Thanh toán tiền</a>
        </div>
        
    </nav>
</div>