<!-- Hero Area -->
<section id="hero-area" class="hero-area">
    <!-- Slider -->
    <div class="slider-area">
        <!-- Single Slider -->
        <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Isi slide tidak boleh lebih dari 3 -->
            <?php if($index < 3): ?>
                <div class="single-slider"
                    style="background-image:url('<?php echo e(check_image($item->file_carousel, 'upload/slider')); ?>')">
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

        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($index < 3): ?>
                <div class="single-slider"
                    style="background-image:url('<?php echo e(check_image($item->file_foto, 'upload/berita')); ?>')">
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
                                    
                                    <a href="<?php echo e(base_url('landing/berita/detail/' . encode($item->id_berita))); ?>">
                                        <h1 style="text-shadow: 1px 1px 2px white; text-transform: none;">
                                            <?php echo e(character_limiter($item->judul_berita, 75, '...')); ?></h1>
                                    </a>
                                    <p style="text-shadow: 1px 1px 2px #2e2751; color: white">
                                        <?php echo e(character_limiter($item->isi_berita, 200, '...')); ?>

                                    </p>
                                    

                                    <div class="button">
                                        <a href="<?php echo e(base_url('landing/berita/detail/' . encode($item->id_berita))); ?>"
                                            class="btn">Lihat Berita</a>
                                        
                                    </div>
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

<?php $__env->startPush('css_style'); ?>
    <style>
        .hero-area .owl-controls .owl-dots {
            top: 37vh;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/beranda/slider.blade.php ENDPATH**/ ?>