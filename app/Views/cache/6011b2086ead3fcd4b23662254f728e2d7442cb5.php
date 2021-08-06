<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="Radix" content="Responsive Multipurpose Business Template">
    <meta name='copyright' content='Radix'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Tag -->
    <title>Radix &#8739; Creative Business & Consulting HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo e(assets_front); ?>images/favicon.png">

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
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/owl.carousel.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/slickslider.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/animate.min.css">

    <!-- Radix StyleShet CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>style.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/responsive.css">

    <!-- Radix Color CSS -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color1.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color2.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color3.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color4.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color5.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color6.css"> -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color7.css">
    <!-- <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/color/color8.css"> -->
    <link rel="stylesheet" href="#" id="colors">
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
    <!-- End Preloader -->

    <!-- Start Header -->
    <header id="header" class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <!-- Contact -->
                        <ul class="contact">
                            <li><i class="fa fa-headphones"></i> +(123) 45678910</li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                            </li>
                            <li><i class="fa fa-clock-o"></i>Opening: 09am-5pm</li>
                        </ul>
                        <!--/ End Contact -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="topbar-right">
                            <!-- Search Form -->
                            <div class="search-form active">
                                <a class="icon" href="#"><i class="fa fa-search"></i></a>
                                <form class="form" action="#">
                                    <input placeholder="Search & Enter" type="search">
                                </form>
                            </div>
                            <!--/ End Search Form -->
                            <!-- Social -->
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                            <!--/ End Social -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Topbar -->
        <!-- Middle Bar -->
        <div class="middle-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo e(assets_front); ?>images/logo.png" alt="logo"></a>
                        </div>
                        <div class="link"><a href="index.html"><span>R</span>adix</a></div>
                        <!--/ End Logo -->
                        <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-lg-10 col-12">
                        <!-- Main Menu -->
                        <div class="mainmenu">
                            <nav class="navigation">
                                <ul class="nav menu" style="padding-right: 0px !important">
                                    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="<?php echo e($nav['index']==$active?'active':''); ?>">
                                            <a href="<?php echo e($nav['url']); ?>"><?php echo e($nav['title']); ?><i class="<?php echo e($nav['child']!=null?'fa fa-caret-down':''); ?>"></i></a>
                                            <?php if($nav['child'] != null): ?>
                                                <ul class="dropdown">
                                                    <?php $__currentLoopData = $nav['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="<?php echo e($sub['index']==$active?'active':''); ?>">
                                                            <a href="<?php echo e($sub['url']); ?>"><?php echo e($sub['title']); ?><i class="<?php echo e($sub['child']!=null?'fa fa-caret-right':''); ?>"></i></a>
                                                            <?php if($sub['child'] != null): ?>
                                                                <ul class="dropdown submenu">
                                                                    <?php $__currentLoopData = $sub['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="<?php echo e($sub2['index']==$active?'active':''); ?>"><a href="<?php echo e($sub2['url']); ?>"><?php echo e($sub2['title']); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                            </nav>
                            <!-- Button -->
                            
                            <!--/ End Button -->
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Middle Bar -->
    </header>
    <!--/ End Header -->
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/template/header.blade.php ENDPATH**/ ?>