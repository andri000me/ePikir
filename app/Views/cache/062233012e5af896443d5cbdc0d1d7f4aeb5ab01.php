

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs"
        style="background-image: url(<?php echo e(assets_front . 'images/background/wall-dark.jpg'); ?>); background-repeat: repeat; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <ul>
                        <li><a href="<?php echo e(base_url('landing/home')); ?>"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-clone"></i>Profil</a></li>
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>Struktur Organisasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Profil</span>
                        <h1>Struktur Organisasi</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <img src="<?php echo e(base_url('upload/profil/' . $profil)); ?>" alt="" class="mx-auto" style="margin-top: 70px">
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/profil/struktur.blade.php ENDPATH**/ ?>