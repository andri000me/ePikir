

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Berita/Artikel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- Berita/Artikel Content -->
    <section class="blogs-main archives single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="share-post-link mb-3" style="padding-block: 5px;">
                                    <div class="sharethis-inline-share-buttons"></div>
                                </div>
                                <div class="blog-head">
                                    <img src="<?php echo e(($berita->file_foto != null?(!file_exists(realpath('upload/berita/'.$berita->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$berita->file_foto):base_url('assets/img/noimage/no_img3.jpg') )); ?>" width="100%" height="500" alt="#">
                                </div>
                                <div class="blog-inner">
                                    <div class="blog-top">
                                        <div class="meta">
                                            <span><i class="fa fa-bullhorn"></i><a href="<?php echo e(base_url('landing/berita?kategori=' . encode($berita->id_kb))); ?>"><?php echo e($berita->nama_kategori); ?></a></span>
                                            <span><i class="fa fa-calendar"></i><?php echo e(formatTanggalTtd($berita->waktu_update)); ?></span>
                                            
                                        </div>
                                        
                                    </div>
                                    <h2><?php echo e($berita->judul_berita); ?></h2>
                                    <p><?php echo e($berita->isi_berita); ?></p>
                                    <div class="bottom-area">
                                        <!-- Next Prev -->
                                        <ul class="arrow">
                                            <li class="prev <?php echo e($berita_prev == null ? 'btn-disabled' : ''); ?>"><a href="<?php echo e($berita_prev != null ? base_url('landing/berita/detail/'.encode($berita_prev->id_berita)) : 'javascript:void(0)'); ?>"><i class="fa fa-angle-double-left"></i> Post Sebelumnya</a></li>
                                            <li class="next <?php echo e($berita_next == null ? 'btn-disabled' : ''); ?>"><a href="<?php echo e($berita_next != null ? base_url('landing/berita/detail/'.encode($berita_next->id_berita)) : 'javascript:void(0)'); ?>">Post Selanjutnya <i class="fa fa-angle-double-right"></i></a></li>
                                        </ul>
                                        <!--/ End Next Prev -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>

                        <div class="col-12">
                            <div class="blog-comments">
                                <h2 class="title">Kirim Komentar</h2>
                                <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Blog Sidebar -->
                    <aside class="blog-sidebar">
                        <!-- Form Cari Berita -->
                        <div class="blogs-main archives single" style="padding: 0px">
                            <?php echo form_open(base_url('landing/berita'), 'class="form" id="formSearchBerita" method="GET"'); ?>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="text" name="search" placeholder="Cari Berita & Enter" value="<?php echo e($search != null ? $search : ''); ?>" required="required">
                                    </div>
                                    <div class="col-sm-2 btn-search">
                                        <button type="submit" class="btn btn-primary" style="top: 0px" title="Cari"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                        </div>

                        <!-- Berita/Artikel Terkini -->
                        <div class="single-sidebar post-tab">
                            <h2><span><i class="fa fa-newspaper-o"></i>Berita Terkini</span></h2>
                            <!-- Single Post -->
                            <?php $__currentLoopData = $berita_terkini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-post">
                                    <div class="post-img">
                                        <img src="<?php echo e(($item->file_foto != null?(!file_exists(realpath('upload/berita/'.$item->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$item->file_foto):base_url('assets/img/noimage/no_img3.jpg') )); ?>" alt="#">
                                    </div>
                                    <div class="post-info">
                                        <h4><a href="<?php echo e(base_url('landing/berita/detail/'.encode($item->id_berita))); ?>"><?php echo e(character_limiter($item->judul_berita, 45, '...')); ?></a></h4>
                                        <p><i class="fa fa-calendar"></i><?php echo e(formatTanggalTtd($item->waktu_update)); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!--/ End Single Post -->
                        </div>

                        <!-- Blog Category -->
                        <div class="single-sidebar category">
                            <h2><span><i class="fa fa-pencil"></i>Kategori Berita</span></h2>
                            <ul>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(base_url('landing/berita?kategori='.encode($item->id_kb))); ?>"><i class="fa fa-caret-right"></i><?php echo e($item->nama_kategori); ?><span>(<?php echo e($item->jml_berita); ?>)</span></a></li>		
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
                            </ul>
                        </div>
                        	
                    </aside>
                    <!--/ End Blog Sidebar -->
                </div>
            </div>		
        </div>
    </section>
    <!--/ End Berita/Artikel Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_style'); ?>
    <!-- Button form search -->
    <style>
        @media(min-width: 768px) {
            .form .btn-search {
                padding-left: 0px;
            }

            .form .btn-search button {
                height: 100%;
            }
        }

        @media(max-width: 767px) {
            .form .btn-search button {
                margin-top: 15px !important;
            }
        }
    </style>

    <!-- Button share medsos -->
    <style>
        .share-post-link .st-btn {
            border-radius: 30px !important;
        }
    </style>

    <!-- Button next/prev post berita -->
    <style>
        .btn-disabled {
            pointer-events: none;
            cursor: default;
        }

        .btn-disabled a {
            background: #c7c7c7 !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c1d0e8ab56cdb0011e86fe3&product=inline-share-buttons' async='async'></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/berita_detail.blade.php ENDPATH**/ ?>