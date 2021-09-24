

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Publikasi', 'label' => 'Informasi Publik'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Informasi Publik</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil text-justify">
                        <table id="tbl_info" class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul Info</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td align="center"><?php echo e($key + 1); ?></td>
                                        <td nowrap><a
                                                href="<?php echo e(base_url('landing/info/detail/' . encode($val->id_info))); ?>"
                                                title="Lihat Dokumen" class="text-danger"><?php echo e($val->nama_info); ?></a>
                                        </td>
                                        <td><?php echo e($val->isi_info); ?></td>
                                        <td align="center"><a href="<?php echo e(base_url('upload/info/' . $val->file_info)); ?>"
                                                title="Download" class="h4"><i
                                                    class="fa fa-file-pdf-o text-danger"></i></a>
                                        </td>
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
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/DataTables/datatables.min.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        .page-item.active .page-link {
            background-color: #ff9800;
            border-color: #dc890d;
        }

        .page-link {
            color: #ff9800;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script type="text/javascript" src="<?php echo e(base_url('assets/external/DataTables/datatables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/js/datatable_option.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        createDataTable('tbl_info');
    </script>

    <script>
        $('#tbl_info_info').parent().parent().css("padding-block", "30px");
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/info.blade.php ENDPATH**/ ?>