<!DOCTYPE HTML>
<html>

<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    include_once APPPATH . "views/auth/shared/cst_vfy_css.php";
    include_once APPPATH . "views/auth/shared/cst_vfy_font.php";
    ?>

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <?php
            include_once APPPATH . "views/auth/shared/cst_vfy_header.php";
            ?>
        </nav>

        <?= $content ?>
        <?php
        include_once APPPATH . "views/auth/shared/cst_vfy_footer.php";
        ?>
    </div>

    <!-- goto -->
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>
    <?php
    include_once APPPATH . "views/auth/shared/cst_vfy_js.php";
    ?>
</body>

</html>