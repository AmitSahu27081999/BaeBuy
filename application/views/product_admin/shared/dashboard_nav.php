<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="<?= base_url("/assets/admin/img/logo.png");?>" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/1.svg");?>" alt="">
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a class="active" href="index-2.html">Home</a></li>
            </ul>

        </li>

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/2.svg");?>" alt="">
                <span>Store</span>
            </a>
            <ul>
                <li><a href="login.html">Orders</a></li>
                <li><a href="products">Products</a></li>
                <li><a href="forgot_pass.html">Transactions</a></li>
            </ul>
        </li>

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/3.svg");?>" alt="">
                <span>Users</span>
            </a>
            <ul>
                <li><a href="mail_box.html">Registered users</a></li>
            </ul>
        </li>

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/4.svg");?>" alt="">
                <span>Setting</span>
            </a>
            <ul>
                <li><a href="#">Details</a></li>
            </ul>
        </li>

    </ul>

</nav>
<!-- sidebar part end -->