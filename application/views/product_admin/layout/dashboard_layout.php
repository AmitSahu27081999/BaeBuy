<!DOCTYPE html>
<html lang="zxx">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?= $title;?></title>

    <?php
    include_once APPPATH . "views/product_admin/shared/dashboard_css.php";
    ?>
</head>

<body class="crm_body_bg">

    <!-- main content part here -->

    <!-- sidebar  -->
    <?php
    include_once APPPATH . "views/product_admin/shared/dashboard_nav.php";
    ?>
    <!--/ sidebar  -->

    <section class="main_content dashboard_part">
        <!-- menu  -->
        <?php
        include_once APPPATH . "views/product_admin/shared/dashboard_header.php";
        ?>
        <!--/ menu  -->

        <!-- content -->
        <?= $content ?>
        <!-- / content -->

        <!-- footer part -->
        <?php
        include_once APPPATH . "views/product_admin/shared/dashboard_footer.php";
        ?>
    </section>
    <!-- main content part end -->

    <?php
    include_once APPPATH . "views/product_admin/shared/dashboard_js.php";
    ?>

</body>

</html>