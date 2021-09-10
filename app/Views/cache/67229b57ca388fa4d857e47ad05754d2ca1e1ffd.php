<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Aplikasi bappeda litbangda Kabupaten Magelang">
    <meta name="keywords"
        content="kabupaten magelang, pemerintah daerah, diskominfo, dinas komunikasi dan informatika, bappeda, litbangda, penelitian, pengabdian, litbang, penelitian & pengembangan, sistem informasi">
    <meta name="author" content="DISKOMINFO KAB MAGELANG">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(base_url('assets/img/logo/logo_kab_sm.png')); ?>">
    <title>e-Pikir &#8739; Admin <?php echo e(ucfirst(session('role'))); ?></title>

    <link rel="apple-touch-icon" href="<?php echo e(base_url()); ?>assets/img/logo/logo_kab_sm.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(base_url('assets/img/logo/logo_kab_sm.png')); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front . 'css/font-awesome.min.css'); ?>">

    <link href="<?php echo e(assets_url . 'app-assets/css/vendors.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(assets_url . 'app-assets/css/app.css'); ?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(assets_url . 'app-assets/css/core/menu/menu-types/vertical-menu-modern.css'); ?>">
    <link href="<?php echo e(assets_url . 'app-assets/css/core/colors/palette-gradient.css'); ?>" type="text/css"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/css/plugins/animate/animate.css'); ?>">

    <!-- Loading Page -->
    <link href="<?php echo e(base_url('assets/css/loading.css')); ?>" type="text/css" rel="stylesheet">

    
    


    <!-- Plugin CSS tambahan -->
    <?php echo $__env->yieldPushContent('css_plugin'); ?>

    <!-- Style CSS tambahan -->
    <?php echo $__env->yieldPushContent('css_style'); ?>

    <style>
        .select2 {
            width: 100% !important;
        }

        .sizeFontSm {
            font-size: 8pt;
        }

        .datepicker {
            font-size: 8pt;
        }

        .dataTables_length {
            float: left;
            margin-right: 10px;
        }

        .dt-buttons {
            float: left;
            width: 175px !important;
        }

        .dataTables_filter label {
            margin-bottom: 10px;
            margin-top: 0px !important;
        }

        .dataTables_filter input {
            height: 40px;
        }

        #dataTable th,
        td {
            padding-inline: 16px !important;
        }

    </style>

</head>

<body class="vertical-layout vertical-menu-modern 2-columns fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <div class="loading-page" style="display: none;"></div>

    <!-- Header -->
    <?php echo $__env->make('template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Menu -->
    <?php echo $__env->make('template/menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Modal -->
    <?php echo $__env->yieldPushContent('modal'); ?>

    <!-- Footer -->
    <?php echo $__env->make('template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/vendors.min.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo e(assets_url . 'app-assets/js/core/app-menu.js'); ?>"></script>
    <script src="<?php echo e(assets_url . 'app-assets/js/core/app.js'); ?>"></script>
    <script src="<?php echo e(assets_url . 'app-assets/js/scripts/customizer.js'); ?>"></script>
    
    

    <!-- Plugin JS tambahan -->
    <?php echo $__env->yieldPushContent('js_plugin'); ?>

    <!-- Script JS tambahan -->
    <?php echo $__env->yieldPushContent('js_script'); ?>

    <script type="text/javascript">
        function inputAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            // alert(charCode);
            if (charCode > 31 && (charCode < 46 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#alts').fadeTo(3000, 500).slideUp(500);
        });
    </script>
</body>

</html>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/template/master.blade.php ENDPATH**/ ?>