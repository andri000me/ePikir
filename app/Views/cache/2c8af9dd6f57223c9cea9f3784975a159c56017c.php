

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row"> </div>
            <div class="content-body">
                <div class="row">

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-info">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Masuk</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="la la-paste font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-success">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Diterima</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="la la-check-square font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                        <div class="card pull-up bg-danger bg-hexagons-danger">
                            <div class="card-content">
                                <div class="card-body ">
                                    <div class="media d-flex">
                                        <div class="media-body text-left text-white">
                                            <span>Total Permohonan Ditolak</span>
                                            <h3 class="text-white">100</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="icon-close font-large-2 float-right text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/fonts/simple-line-icons/style.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Kesbangpol\Views/content/dashboard/dashboard.blade.php ENDPATH**/ ?>