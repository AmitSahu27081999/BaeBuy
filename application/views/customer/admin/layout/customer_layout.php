<!DOCTYPE HTML>
<html>

<head>
    <title><?= $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include_once APPPATH . "views/customer/admin/shared/customer_css.php";
    include_once APPPATH . "views/customer/admin/shared/customer_font.php";
    ?>

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <?php
            include_once APPPATH . "views/customer/admin/shared/customer_header.php";
            ?>
            <?php
            include_once APPPATH . "views/customer/admin/shared/customer_offerbar.php";
            ?>
        </nav>

        <?= $content ?>
        <?php
        include_once APPPATH . "views/customer/admin/shared/customer_footer.php";
        ?>
    </div>

    <!-- goto -->
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <?php
    include_once APPPATH . "views/customer/admin/shared/customer_js.php";
    ?>
</body>

</html>