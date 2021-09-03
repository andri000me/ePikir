

<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Masuk</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('kesbangpol')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Permohonan Masuk</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-4 col-12">
                    <div class="dropdown float-md-right">
                        <button
                            class="btn btn-<?php echo e($status == 3 ? 'success' : ($status == 4 ? 'danger' : 'primary')); ?> btn-block dropdown-toggle round px-2"
                            id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><?php echo e($info_status); ?></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
                            <a class="dropdown-item text-center"
                                href="<?php echo e(base_url('kesbangpol/penelitian/selesai?status=3')); ?>">Disetujui</a>
                            <a class="dropdown-item text-center"
                                href="<?php echo e(base_url('kesbangpol/penelitian/selesai?status=4')); ?>">Ditolak</a>
                            <a class="dropdown-item text-center"
                                href="<?php echo e(base_url('kesbangpol/penelitian/selesai?status=5')); ?>">Semua</a>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="content-body">
                <section class="inputmask" id="inputmask">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Permohonan</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <!-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> -->
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">

                                    <div class="card-body">

                                        <?php echo show_alert(); ?>


                                        <?php echo $__env->make('template.searchbar', ['table_name' => 'tbl_data_rpl'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <table id="tbl_data_rpl" class="table table-hover table-bordered table-striped"
                                            style="font-size: 8pt">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>#</th>
                                                    <th class="text-center">Aksi</th>
                                                    <th>Lampiran</th>
                                                    <th>Nomor</th>
                                                    <?php if($status == 5): ?>
                                                        <th>Status</th>
                                                    <?php endif; ?>
                                                    <th>Tgl Pengajuan</th>
                                                    <th>Nama</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>Lokasi</th>
                                                    <th>Judul</th>
                                                </tr>
                                            </thead>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(assets_url . 'app-assets/vendors/css/tables/datatable/datatables.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        .no-wrap {
            white-space: nowrap;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/tables/datatable/datatables.min.js'); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo e(base_url('assets/js/get_data_rpl.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(base_url('assets/js/delete_data.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        showDataTable("<?php echo e(base_url('kesbangpol/penelitian/getdata/' . $status . '/tbl_data_rpl')); ?>",
            "<?php echo e($status); ?>");
    </script>

    <script>
        function cetakSuratRpl(data) {
            var id = $(data).data().id;
            window.open("<?php echo e(base_url('kesbangpol/penelitian/cetak')); ?>/" + id);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('content.penelitian.modal_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Kesbangpol\Views/content/penelitian/rpl_selesai.blade.php ENDPATH**/ ?>