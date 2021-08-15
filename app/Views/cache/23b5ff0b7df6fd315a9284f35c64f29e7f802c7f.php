<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta tag -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="epikir.magelangkab.go.id">
    <meta name="description"
        content="<?php echo e(isset($meta) ? $meta['description'] : 'Website e-Pikir BAPPEDA LITBANGDA Kabupaten Magelang'); ?>">
    <meta property="og:url"
        content="<?= $full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
    <meta name="keywords"
        content="<?php echo e(isset($meta) ? $meta['title'] . ', e-Pikir Kabupaten Magelang, epikir, Kabupaten Magelang, litbang, riset, penelitian, bappeda, litbangda, bappedalitbangda, litbang magelang' : 'e-Pikir Kabupaten Magelang, epikir, Kabupaten Magelang, litbang, riset, penelitian, bappeda, litbangda, bappedalitbangda, litbang magelang'); ?>">
    <meta property="og:title"
        content="<?php echo e(isset($meta) ? $meta['title'] : 'e-Pikir | BAPPEDA LITBANGDA Kab. Magelang'); ?>" />

    <meta property="og:image"
        content="<?php echo e(isset($meta) ? base_url('upload/berita/' . $meta['image']) : base_url('assets/img/logo/logo_kab_sm.png')); ?>" />


    

    <!-- Title Tag -->
    <title>e-Pikir &#8739; BAPPEDA LITBANGDA Kab. Magelang</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(base_url('assets/img/logo/logo_kab_sm.png')); ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/font-awesome.min.css">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/slicknav.min.css">
    <!-- Cube Portfolio CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/cubeportfolio.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/magnific-popup.min.css">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/jquery.fancybox.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/niceselect.css">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/slickslider.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/animate.min.css">

    <!-- Radix StyleShet CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>style.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/responsive.css">

    <!-- Radix Color CSS -->
    
    
    
    
    
    
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color7.css">
    
    <link rel="stylesheet" href="#" id="colors">

    <!-- Plugin CSS tambahan -->
    <?php echo $__env->yieldPushContent('css_plugin'); ?>

    <!-- Style CSS tambahan -->
    <?php echo $__env->yieldPushContent('css_style'); ?>


</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="single-loader one"></div>
            <div class="single-loader two"></div>
            <div class="single-loader three"></div>
            <div class="single-loader four"></div>
            <div class="single-loader five"></div>
            <div class="single-loader six"></div>
            <div class="single-loader seven"></div>
            <div class="single-loader eight"></div>
            <div class="single-loader nine"></div>
        </div>
    </div>

    <!-- Header -->
    <?php echo $__env->make('template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <?php echo $__env->make('template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Footer -->

    <!-- Jquery -->
    <script src="<?php echo e(assets_front); ?>js/jquery.min.js"></script>
    <script src="<?php echo e(assets_front); ?>js/jquery-migrate.min.js"></script>
    <!-- Popper JS -->
    <script src="<?php echo e(assets_front); ?>js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo e(assets_front); ?>js/bootstrap.min.js"></script>
    <!-- Colors JS -->
    <script src="<?php echo e(assets_front); ?>js/colors.js"></script>
    <!-- Modernizer JS -->
    <script src="<?php echo e(assets_front); ?>js/modernizr.min.js"></script>
    <!-- Nice select JS -->
    <script src="<?php echo e(assets_front); ?>js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="<?php echo e(assets_front); ?>js/tilt.jquery.min.js"></script>
    <!-- Fancybox  -->
    <script src="<?php echo e(assets_front); ?>js/jquery.fancybox.min.js"></script>
    <!-- Jquery Nav -->
    <script src="<?php echo e(assets_front); ?>js/jquery.nav.js"></script>

    <!-- Slick Slider JS -->
    <script src="<?php echo e(assets_front); ?>js/slickslider.min.js"></script>
    <!-- Cube Portfolio JS -->
    <script src="<?php echo e(assets_front); ?>js/cubeportfolio.min.js"></script>
    <!-- Slicknav JS -->
    <script src="<?php echo e(assets_front); ?>js/jquery.slicknav.min.js"></script>
    <!-- Jquery Steller JS -->
    <script src="<?php echo e(assets_front); ?>js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo e(assets_front); ?>js/magnific-popup.min.js"></script>
    <!-- Wow JS -->
    <script src="<?php echo e(assets_front); ?>js/wow.min.js"></script>
    <!-- CounterUp JS -->
    <script src="<?php echo e(assets_front); ?>js/jquery.counterup.min.js"></script>
    <!-- Waypoint JS -->
    <script src="<?php echo e(assets_front); ?>js/waypoints.min.js"></script>
    <!-- Jquery Easing JS -->
    <script src="<?php echo e(assets_front); ?>js/easing.min.js"></script>
    <!-- Google Map JS -->
    
    
    <!-- Main JS -->
    <script src="<?php echo e(assets_front); ?>js/main.js"></script>

    <!-- Plugin JS tambahan -->
    <?php echo $__env->yieldPushContent('js_plugin'); ?>

    <!-- Script JS tambahan -->
    <?php echo $__env->yieldPushContent('js_script'); ?>
</body>

</html>
<?php /**PATH D:\PROJECT\CODE IGNITER 4\epikir_new\app\Modules\Landing\Views/template/master.blade.php ENDPATH**/ ?>