<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="<?= base_url('dashboard') ?>"><img src="<?= base_url("/assets/admin/img/logo.png"); ?>" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/1.svg"); ?>" alt="">
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a class="active" href="<?= base_url('dashboard') ?>">Home</a></li>
            </ul>

        </li>

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/2.svg"); ?>" alt="">
                <span>Products</span>
            </a>
            <ul>
                <li><a href="<?= base_url('products') ?>">Products</a></li>
                <li><a href="<?= base_url('varients') ?>">Products Varients</a></li>
                <li><a href="<?= base_url('category') ?>">Products Category</a></li>
            </ul>
        </li>

        <li class="">
            <a href="<?= base_url('orders') ?>" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/3.svg"); ?>" alt="">
                <span>Orders</span>
            </a>
        </li>
        <li class="">
            <a href="<?= base_url('transaction') ?>" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/3.svg"); ?>" alt="">
                <span>Transactions</span>
            </a>
        </li>

        <li class="">
            <a href="<?= base_url('users') ?>" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/3.svg"); ?>" alt="">
                <span>Users</span>
            </a>
        </li>

        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <img src="<?= base_url("/assets/admin/img/menu-icon/4.svg"); ?>" alt="">
                <span>Setting</span>
            </a>
            <ul>
                <li><a href="#">Details</a></li>
            </ul>
        </li>

    </ul>

</nav>
<!-- sidebar part end -->