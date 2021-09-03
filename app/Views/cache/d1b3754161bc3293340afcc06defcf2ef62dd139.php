

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Rencana Kerja'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Rencana Kerja</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        
                        <?php if($renja != null): ?>
                            <iframe src="<?php echo e(base_url('upload/renja/' . $renja->file_rk)); ?>"
                                style="width:100%; height:80vh;" frameborder="0"></iframe>
                        <?php endif; ?>

                        
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/renja.blade.php ENDPATH**/ ?>