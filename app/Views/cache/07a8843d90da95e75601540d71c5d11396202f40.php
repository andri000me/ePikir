<!-- Hero Area -->
<section id="hero-area" class="hero-area">
    <!-- Slider -->
    <div class="slider-area">
        <!-- Single Slider -->
        <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Isi slide tidak boleh lebih dari 5 -->
            <?php if($index < 5): ?>
                <div class="single-slider"
                    style="background-image:url('<?php echo e(base_url('upload/slider/' . $item->file_carousel)); ?>')">
                    <div class="container">
                        <div class="row">
                            <!-- Modulus 3 jika sisa 1 -->
                            <?php if($index % 3 == 1): ?>
                                <div class="col-lg-5 col-md-6 col-12"></div>
                            <?php endif; ?>

                            <div class="<?php echo e($index % 3 == 2 ? 'col-lg-10 offset-lg-1' : 'col-lg-7 col-md-6'); ?> col-12">
                                <!-- Slider Text -->
                                <div
                                    class="slider-text <?php echo e($index % 3 == 0 ? 'text-left' : ($index % 3 == 1 ? 'text-right' : 'text-center')); ?>">
                                    
                                    <h1 style="text-shadow: 1px 1px 2px white; text-transform: none;">
                                        <?php echo $item->judul_carousel; ?></h1>
                                    <p style="text-shadow: 1px 1px 2px #2e2751; color: white">
                                        <?php echo e($item->ket_carousel); ?>

                                    </p>
                                    

                                    
                                </div>
                                <!--/ End Slider Text -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <!--/ End Slider -->
</section>
<!--/ End Hero Area -->

<?php $__env->startPush('css_plugin'); ?>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo e(assets_front); ?>css/owl.carousel.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <!-- Owl Carousel JS -->
    <script src="<?php echo e(assets_front); ?>js/owl.carousel.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/beranda/slider.blade.php ENDPATH**/ ?>