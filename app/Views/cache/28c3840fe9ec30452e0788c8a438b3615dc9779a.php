

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Informasi Publik'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Informasi Publik</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <div class="button">
                            <a href="<?php echo e(base_url('landing/info')); ?>" class="btn primary" style="z-index: 999"><i
                                    class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                        
                        <iframe src="<?php echo e(base_url('upload/info/' . $info->file_info)); ?>" style="width:100%; height:80vh;"
                            frameborder="0"></iframe>
                        
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        .profil .button {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .profil .button .btn {
            border-radius: 30px;
        }

        .profil .button .btn:hover {
            background: #2e2751;
            color: #fff;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/info_detail.blade.php ENDPATH**/ ?>