<!-- Galeri -->
<section id="portfolio" class="portfolio section"
    style="background-image: url('<?php echo e(assets_front . 'images/background/bg-1.png'); ?>')">
    <div class="container">
        <div class="row" style="margin: 52px">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg" style="color: #e2e2e2b3">Galeri</span>
                    <h1>Dokumentasi Kegiatan Terkini</h1>
                    
                </div>
            </div>
        </div>

        

        <?php if($galeri != null && $galeri != ''): ?>
            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-12">
                        <div id="portfolio-item">
                            <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Single portfolio -->
                                <div class="cbp-item">
                                    <div class="portfolio-single">
                                        <div class="portfolio-head">
                                            <img src="<?php echo e($item->file_foto != null ? base_url('upload/galeri/' . $item->file_foto) : 'https://i.ytimg.com/vi_webp/' . get_segment($item->link_video) . '/sddefault.webp'); ?>"
                                                alt="#" />
                                        </div>
                                        <div class="portfolio-hover" style="padding: 15px">
                                            <h4 style="font-size: 12pt">
                                                <?php if($item->jenis_galeri == 1): ?>
                                                    <a data-fancybox="gallery1"
                                                        href="<?php echo e(base_url('upload/galeri/' . $item->file_foto)); ?>"><?php echo e($item->judul_galeri); ?></a>
                                                <?php else: ?>
                                                    <a href="<?php echo e($item->link_video); ?>"
                                                        class="cbp-lightbox"><?php echo e($item->judul_galeri); ?></a>
                                                <?php endif; ?>
                                            </h4>
                                            <p style="font-size: 0.7rem;">
                                                <?php echo e(character_limiter($item->ket_galeri != null && $item->ket_galeri != '' ? $item->ket_galeri : $item->judul_galeri, 400, '...')); ?>

                                            </p>
                                            <div class="button" style="position: absolute; bottom: 15px;">
                                                <?php if($item->jenis_galeri == 1): ?>
                                                    <a class="primary" data-fancybox="gallery2"
                                                        href="<?php echo e(base_url('upload/galeri/' . $item->file_foto)); ?>"><i
                                                            class="fa fa-search"></i></a>
                                                <?php else: ?>
                                                    <a href="<?php echo e($item->link_video); ?>" class="primary cbp-lightbox"><i
                                                            class="fa fa-play"></i></a>
                                                <?php endif; ?>

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End portfolio -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="button">
                            <a class="btn primary" href="<?php echo e(base_url('landing/galeri')); ?>">Lihat Semua Galeri</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center font-italic">
                    <div class="shadow p-3 mt-5 bg-white rounded"
                        style="color: #2e2751; box-shadow: 0px 2px 8px #a7a7a77a;">
                        <h5><i class="fa fa-picture-o"></i> Belum ada dokumentasi kegiatan terkini.</h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!--/ End Galeri -->
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/beranda/galeri.blade.php ENDPATH**/ ?>