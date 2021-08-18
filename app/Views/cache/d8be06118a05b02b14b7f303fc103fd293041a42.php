<!-- Berita Terikini -->
<section class="blogs-main section"
    style="background-image: url('<?php echo e(assets_front . 'images/background/bg-11.png'); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg" style="color:#4b396d85">Artikel</span>
                    <h1>Berita Terkini</h1>
                    
                </div>
            </div>
        </div>
        <?php if($berita != null && $berita != ''): ?>
            <div class="row" style="margin-top: 40px">
                <div class="col-12">
                    <div class="row blog-slider">
                        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="<?php echo e(count($berita) > 3 ? 'col-lg-4' : ''); ?> col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="<?php echo e(base_url('upload/berita/' . $item->file_foto)); ?>" alt="#">
                                    </div>
                                    <div class="blog-bottom">
                                        <div class="blog-inner">
                                            <h4><a
                                                    href="<?php echo e(base_url('landing/berita_detail/' . encode($item->id_berita))); ?>"><?php echo e($item->judul_berita); ?></a>
                                            </h4>
                                            <p><?php echo e(character_limiter($item->isi_berita, 100, '...')); ?></p>
                                            <div class="meta">
                                                <span><i class="fa fa-bullhorn"></i><a
                                                        href="<?php echo e(base_url('landing/berita/' . encode($item->id_kb))); ?>"><?php echo e($item->nama_kategori); ?></a></span>
                                                <span><i
                                                        class="fa fa-calendar"></i><?php echo e(date('d F Y', strtotime($item->waktu_update))); ?></span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="button">
                        <a class="btn primary" href="<?php echo e(base_url('landing/berita')); ?>">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-12 text-center font-italic">
                    <div class="shadow p-3 mt-5 bg-white rounded"
                        style="color: #2e2751; box-shadow: 0px 2px 8px #a7a7a77a;">
                        <h5><i class="fa fa-newspaper-o"></i> Belum ada berita terkini.</h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!--/ End Berita Terikini -->

<?php $__env->startPush('css_style'); ?>
    <style>
        .blogs-main {
            background: #2e2751;
        }

        .blogs-main .button {
            text-align: center;
            margin-top: 50px;
        }

        .blogs-main .button .btn {
            border-radius: 30px;
        }

        .blogs-main .button .btn:hover {
            background: #fff;
            color: #2e2751;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/beranda/berita.blade.php ENDPATH**/ ?>