

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
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>Regulasi Kelitbangan</a>
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
                        <h1>Regulasi Kelitbangan</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <table id="tbl_regulasi" class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th width="150">Peraturan</th>
                                    <th>Tentang</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $regulasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td align="center"><?php echo e($key + 1); ?></td>
                                        <td><a href="<?php echo e(base_url('landing/regulasi/detail/'.encode($val->id_regulasi))); ?>" title="Lihat Dokumen" class="text-danger"><?php echo e($val->nama_regulasi); ?></a></td>
                                        <td><?php echo e($val->isi_regulasi); ?></td>
                                        <td align="center"><a href="<?php echo e(base_url('upload/regulasi/'.$val->file_regulasi)); ?>" title="Download" class="h4"><i class="fa fa-file-pdf-o text-danger"></i></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!--/ End About Content -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Us -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/vendor/DataTables/datatables.min.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?> 
    <script type="text/javascript" src="<?php echo e(base_url('assets/vendor/DataTables/datatables.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        $('#tbl_regulasi').dataTable();
    </script>
    <script>
        $('#tbl_regulasi_info').parent().parent().css("padding-block","30px");
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/profil/regulasi.blade.php ENDPATH**/ ?>