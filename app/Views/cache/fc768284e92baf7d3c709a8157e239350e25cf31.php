

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Dokumentasi Kegiatan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Galeri Section -->
    <section id="portfolio" class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Dokumentasi Kegiatan</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <!-- portfolio Nav -->
                    <div class="portfolio-nav">
                        <ul class="tr-list list-inline" id="portfolio-menu">
                            <li data-filter="*" class="cbp-filter-item active">Semua Galeri<div class="cbp-filter-counter">
                                </div>
                            </li>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-filter=".<?php echo e(str_replace(' ', '-', strtolower($item->nama_kategori))); ?>-x<?php echo e($item->id_kg); ?>"
                                    class="cbp-filter-item"><?php echo e($item->nama_kategori); ?><div class="cbp-filter-counter">
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <li data-filter=".videos" class="cbp-filter-item">Video<div class="cbp-filter-counter">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>
            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-12">
                        <div id="portfolio-item">
                            <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Galeri -->
                                <div
                                    class="cbp-item <?php echo e(str_replace(' ', '-', strtolower($item->nama_kategori))); ?>-x<?php echo e($item->id_kg); ?> <?php echo e($item->jenis_galeri == 2 ? 'videos' : ''); ?>">
                                    <div class="portfolio-single">
                                        <div class="portfolio-head">
                                            <img src="<?php echo e($item->file_foto != null ? (!file_exists(realpath('upload/galeri/' . $item->file_foto)) ? base_url('assets/img/noimage/no_img3.jpg') : base_url('upload/galeri/' . $item->file_foto)) : ($item->link_video != null ? 'https://i.ytimg.com/vi_webp/' . get_segment($item->link_video) . '/sddefault.webp' : base_url('assets/img/noimage/no_img3.jpg'))); ?>"
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
                                <!--/ End Galeri -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Galeri -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/galeri.blade.php ENDPATH**/ ?>