

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Berita/Artikel'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- Blogs Area -->
    <section class="blogs-main archives section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="<?php echo e(($item->file_foto != null?(!file_exists(realpath('upload/berita/'.$item->file_foto)))?base_url('assets/img/noimage/no_img3.jpg'):base_url('upload/berita/'.$item->file_foto):base_url('assets/img/noimage/no_img3.jpg') )); ?>" width="100%" height="265" alt="#">
                                    </div>
                                    <div class="blog-bottom">
                                        <div class="blog-inner">
                                            <h4><a
                                                href="<?php echo e(base_url('landing/berita_detail/' . encode($item->id_berita))); ?>"><?php echo e(character_limiter($item->judul_berita, 50, '...')); ?></a>
                                            </h4>
                                            <p><?php echo e(character_limiter($item->isi_berita, 120, '...')); ?></p>
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
                    <div class="row">
                        <div class="col-12">
                            <?php echo $pager->links('berita', 'pagination_style'); ?>

                        </div>
                    </div>	
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Blog Sidebar -->
                    <aside class="blog-sidebar">
                        <div class="header">
                            <div class="search-form active">
                                <a class="icon" href="#"><i class="fa fa-search"></i></a>
                                <form class="form" action="#">
                                    <input placeholder="Search &amp; Enter" type="search">
                                </form>
                            </div>
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
                        <!--/ End Blog Category -->									
                        
                    </aside>
                    <!--/ End Blog Sidebar -->
                </div>
            </div>		
        </div>
    </section>
    <!--/ End Blogs Area -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/berita.blade.php ENDPATH**/ ?>