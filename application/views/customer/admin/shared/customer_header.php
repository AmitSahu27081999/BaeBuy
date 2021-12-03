<div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-md-8">
                <div id="colorlib-logo"><a href="index.html">Footwear</a></div>
            </div>
            <div class="col-sm-5 col-md-3">
                <form action="#" class="search-wrap">
                    <div class="form-group">
                        <input type="search" class="form-control search" placeholder="Search">
                        <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-5 col-md-1">
                <form action="#" class="search-wrap">
                    <div class="form-group">
                        <a class="btn btn-primary submit-search " type="button" href="login"><i class="icon-user"></i></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left menu-1">
                <ul>
                    <li class="active has-dropdown txtclr">
                        <a href="<?= base_url('index')?>">Home</a>
                        <ul class="dropdown">
                            <li><a href="product-detail.html">Product Detail</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="order-complete.html">Order Complete</a></li>
                            <li><a href="add-to-wishlist.html">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="txtclr"><a href="<?= base_url('men')?>">Men</a></li>
                    <li class="txtclr"><a href="<?= base_url('women')?>">Women</a></li>
                    <li class="txtclr"><a href="<?= base_url('about')?>">About</a></li>
                    <li class="txtclr"><a href="<?= base_url('contact')?>">Contact</a></li>
                    <li class="cart"><a href="<?= base_url('cart')?>"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>