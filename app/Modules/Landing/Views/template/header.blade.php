<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta tag -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="epikir.magelangkab.go.id">
    <meta name="description" content="ePikir Kabupaten Magelang">
    <meta property="og:url" content="https://epikir.magelangkab.go.id/" />
    <meta name="keywords" content="ePikir Kabupaten Magelang, epikir, Kabupaten Magelang, litbang, riset, penelitian, bappeda, bappedalitbangda, litbang magelang">
    <meta property="og:title" content="ePikir Kabupaten Magelang" />

    <!-- Title Tag -->
    <title>e-Pikir &#8739; Kabupaten Magelang</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{base_url('assets/img/logo/logo_kab_sm.png')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ assets_front }}css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/font-awesome.min.css">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/slicknav.min.css">
    <!-- Cube Portfolio CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/cubeportfolio.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/magnific-popup.min.css">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/jquery.fancybox.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/niceselect.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/owl.theme.default.css">
    <link rel="stylesheet" href="{{ assets_front }}css/owl.carousel.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/slickslider.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/animate.min.css">

    <!-- Radix StyleShet CSS -->
    <link rel="stylesheet" href="{{ assets_front }}css/reset.css">
    <link rel="stylesheet" href="{{ assets_front }}style.css">
    <link rel="stylesheet" href="{{ assets_front }}css/responsive.css">

    <!-- Radix Color CSS -->
    {{-- <link rel="stylesheet" href="{{ assets_front }}css/color/color1.css">
    <link rel="stylesheet" href="{{ assets_front }}css/color/color2.css">
    <link rel="stylesheet" href="{{ assets_front }}css/color/color3.css">
    <link rel="stylesheet" href="{{ assets_front }}css/color/color4.css">
    <link rel="stylesheet" href="{{ assets_front }}css/color/color5.css">
    <link rel="stylesheet" href="{{ assets_front }}css/color/color6.css"> --}}
    <link rel="stylesheet" href="{{ assets_front }}css/color/color7.css">
    {{-- <link rel="stylesheet" href="{{ assets_front }}css/color/color8.css"> --}}
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
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourmail.com">info@yourmail.com</a></li>
                            {{-- <li><i class="fa fa-clock-o"></i>Opening: 09am-5pm</li> --}}
                        </ul>
                        <!--/ End Contact -->
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="topbar-right">
                            {{-- <!-- Search Form -->
                            <div class="search-form active">
                                <a class="icon" href="#"><i class="fa fa-search"></i></a>
                                <form class="form" action="#">
                                    <input placeholder="Search & Enter" type="search">
                                </form>
                            </div>
                            <!--/ End Search Form --> --}}
                            <!-- Social -->
                            <ul class="social">
                                <li style="border-right: 1px solid #cccccc; border-left: 1px solid #cccccc;"><a href="{{base_url('Auth')}}" style="padding-inline: 10px"><i class="fa fa-user"></i> Login</a></li>
                                {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li> --}}
                            </ul>
                            <!--/ End Social -->
                            {{-- <div class="button">
                                <a href="contact.html" class="btn">Login</a>
                            </div> --}}
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
                    <div class="col-xl-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="javascript:void(0)">
                                <img src="{{base_url('assets/img/logo/logo_kab_lg.png')}}" width="75" alt="logo"> 
                                <span class="d-lg-none d-xl-block">e-Pikir</span>
                            </a>
                        </div>
                        <div class="link"><a href="index.html"><span>e</span>Pikir</a></div>
                        <!--/ End Logo -->
                        <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-xl-10 col-12">
                        <!-- Main Menu -->
                        <div class="mainmenu">
                            <nav class="navigation">
                                <ul class="nav menu" style="padding-right: 0px !important">
                                    @foreach ($menu as $nav)
                                        <li class="{{$nav['index']==$active?'active':''}}">
                                            <a href="{{$nav['url']}}">{{$nav['title']}}<i class="{{$nav['child']!=null?'fa fa-caret-down':''}}"></i></a>
                                            @if ($nav['child'] != null)
                                                <ul class="dropdown">
                                                    @foreach ($nav['child'] as $sub)
                                                        <li class="{{$sub['index']==$active?'active':''}}">
                                                            <a href="{{$sub['url']}}">{{$sub['title']}}<i class="{{$sub['child']!=null?'fa fa-caret-right':''}}"></i></a>
                                                            @if ($sub['child'] != null)
                                                                <ul class="dropdown submenu">
                                                                    @foreach ($sub['child'] as $sub2)
                                                                        <li class="{{$sub2['index']==$active?'active':''}}"><a href="{{$sub2['url']}}">{{$sub2['title']}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    
                                </ul>
                            </nav>
                            <!-- Button -->
                            {{-- <div class="button">
                                <a href="contact.html" class="btn">Get a quote</a>
                            </div> --}}
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
