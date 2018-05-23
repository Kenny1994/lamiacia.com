<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?php echo base_url('assets/admin')?>/images/faces/myface.jpg" alt="profile">
                    <span class="login-status online"></span> <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">N.Đ Hoàng</span>
                    <span class="text-secondary text-small">Developer</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo get_admin_url('home')?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-manager" aria-expanded="false" aria-controls="user-manager">
                <span class="menu-title">Tài Khoản</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi mdi-account-box-outline  menu-icon"></i>
            </a>
            <div class="collapse" id="user-manager">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('user')?>">Danh sách quản trị </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#catalog-manager" aria-expanded="false" aria-controls="user-manager">
                <span class="menu-title">Sản phẩm</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-clipboard menu-icon"></i>
            </a>
            <div class="collapse" id="catalog-manager">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('product')?>">Sản phẩm</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo get_admin_url('catalog')?>">Danh mục sản phẩm</a></li>
                </ul>
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Phản hồi</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>