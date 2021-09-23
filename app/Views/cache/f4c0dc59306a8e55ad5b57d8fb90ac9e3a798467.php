

<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Selesai</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Klinik Penelitian</a></li>
                                <li class="breadcrumb-item active">Permohonan Selesai</li>
                            </ol>
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
                                            
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">

                                    <div class="card-body">

                                        <?php echo show_alert(); ?>


                                        <?php echo $__env->make('template.searchbar', ['table_name' => 'tbl_data_kpl'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <table id="tbl_data_kpl" class="table table-hover table-bordered table-striped"
                                            style="font-size: 8pt">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>#</th>
                                                    <th class="text-center">Aksi</th>
                                                    <th>Tgl Pengajuan</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Judul Penelitian</th>
                                                    <th>Jenis Permohonan</th>
                                                    <th>Keterangan</th>
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

<?php $__env->startPush('modal'); ?>
    <div class="modal fade text-left" id="modal_cetak" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Cetak Surat Keterangan Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Pejabat yang menandatangani
                            <span class="required text-danger">*</span>
                        </h5>
                        <input type="hidden" id="id_rpl" name="id_rpl">
                        <div class="controls">
                            <select id="id_petugas" name="id_petugas" class="form-control select2">
                                <?php $__currentLoopData = $petugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e(encode($item->id_petugas)); ?>"><?php echo e($item->nama_petugas); ?> -
                                        <?php echo e($item->jabatan_petugas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Tanggal Surat
                            <span class="required text-danger">*</span>
                        </h5>
                        <div class="controls">
                            <input type="text" id="tgl_surat" name="tgl_surat" class="form-control date-picker"
                                autocomplete="off" required placeholder="DD-MM-YYYY" value="<?php echo e(date('d-m-Y')); ?>">
                        </div>
                    </div>
                    <input type="hidden" id="id_usr" name="id_usr">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-info" onclick="cetakSuratRpl()" title="Export">Export to
                        Word</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(assets_url . 'app-assets/vendors/css/tables/datatable/datatables.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>">

    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css'); ?>">
    <link rel="stylesheet"
        href="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css'); ?>">
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
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript">
    </script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/get_data_kpl.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(base_url('assets/js/delete_data.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        showDataTable("<?php echo e(base_url('bappeda/klinik/getdata/' . $status . '/tbl_data_kpl')); ?>",
            "<?php echo e($status); ?>");
    </script>

    <script>
        $(".select2").select2();
    </script>

    <script>
        $('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy'
        });
    </script>

    <script>
        function showModalCetak(data) {
            var id = $(data).data().id;
            $('#modal_cetak #id_rpl').val(id);
            $('#modal_cetak').modal({
                backdrop: 'static',
                keyboard: false
            });
        }

        function cetakSuratRpl() {
            var id = $('#modal_cetak #id_rpl').val();
            var idp = $('#modal_cetak #id_petugas').val();
            var tgl = $('#modal_cetak #tgl_surat').val();
            window.open("<?php echo e(base_url('bappeda/klinik/cetak')); ?>?id=" + id + "&&idp=" + idp + "&&tgl=" + tgl);
            $('#modal_cetak').modal('hide');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('content.penelitian.dpmptsp.modal_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/klinik/kpl_selesai.blade.php ENDPATH**/ ?>