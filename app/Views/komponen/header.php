<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/assets/img/logo/logo_kab_sm.png">
    <title>Sistem Perizinan Kegiatan/Usaha</title>

    <link rel="apple-touch-icon" href="<?= base_url() ?>/assets/img/logo/logo_kab_sm.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/logo/logo_kab_sm.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
    rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
    rel="stylesheet">

    <?php if (isset($css)) { foreach ($css as $val) { ?>
        <link href="<?= $val ?>" type="text/css" rel="stylesheet">
    <?php }} ?>

    <script src="<?= assets_url ?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>

    <?php 
        if (isset($js)) {
            foreach ($js as $val) { 
    ?>         
        <script src="<?= $val ?>"></script>
    <?php }} ?>

    <style>
        .select2{
            width: 100% !important;
        }
    </style>
    
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header bg-danger">
                <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="javascript:void(0)">
                    <img class="brand-logo" alt="modern admin logo" src="<?= base_url() ?>/assets/img/logo/logo_kab_sm.png">
                    <h3 class="brand-text"><?= ucfirst($role) ?> Page</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
                </ul>
            </div>
            
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <!-- <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li> -->
                        
                        <!-- <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0)" data-toggle="dropdown">
                                <?php  
                                    $namaUser = $nama_user;
                                    $first = substr($namaUser, 0, 1);
                                    $label = strtoupper($first);
                                ?>
                                <span class="mr-1">
                                    Hello, <span class="user-name text-bold-700" style="display: inline-block"><?= $namaUser ?></span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="<?= base_url() ?>/assets/img/icon-profil/<?= $label ?>.jpg" alt="avatar"><i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a> -->
                                <!-- <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                        <!-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                            </div>
                        </li> -->
                        <!-- <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Notifications</span>
                                </h6>
                                <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">You have new order!</h6>
                                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading red darken-1">99% Server load</h6>
                                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Complete the task</h6>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Generate monthly report</h6>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown dropdown-notification nav-item">
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">Messages</span>
                                </h6>
                                <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100">
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left">
                                        <span class="avatar avatar-sm avatar-online rounded-circle">
                                        <img src="<?//= assets_url ?>app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Margaret Govan</h6>
                                        <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left">
                                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                                        <img src="<?//= assets_url ?>app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Bret Lezama</h6>
                                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left">
                                        <span class="avatar avatar-sm avatar-online rounded-circle">
                                        <img src="<?//= assets_url ?>app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Carie Berra</h6>
                                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="media">
                                    <div class="media-left">
                                        <span class="avatar avatar-sm avatar-away rounded-circle">
                                        <img src="<?//= assets_url ?>app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Eric Alsobrook</h6>
                                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                                        <small>
                                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                                        </small>
                                    </div>
                                    </div>
                                </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>



