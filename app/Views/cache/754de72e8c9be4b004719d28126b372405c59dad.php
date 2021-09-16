

<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Diproses</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Penelitian</a></li>
                                <li class="breadcrumb-item"><a href="#">Dpmptsp</a></li>
                                <li class="breadcrumb-item active">Permohonan Diproses</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    
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


                                        <?php echo $__env->make('template.searchbar', ['table_name' => 'tbl_data_rpl'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <table id="tbl_data_rpl" class="table table-hover table-bordered table-striped"
                                            style="font-size: 8pt">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>#</th>
                                                    <th class="text-center">Aksi</th>
                                                    <th>Lampiran</th>
                                                    <th>Nomor</th>
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

<?php $__env->startPush('modal'); ?>
    <div class="modal animated bounceIn text-left" id="modal_confirm" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h4 class="modal-title white" id="myModalLabel10">Proses Permohonan</h4> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <i class="la la-warning warning" style="font-size: 70pt;"></i>
                    <h2 style="font-weight: bold;">
                        Konfirmasi permohonan
                    </h2>
                    <br>
                    <div class="font-medium-3">
                        Apakah permohonan akan disetujui?
                        <input type="hidden" id="id_usr" name="id_usr">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-danger" onclick="showConfirmTolakModal()"
                        title="Tolak">Tolak</button>
                    <button type="button" class="btn btn-info" onclick="terimaPermohonan()" title="Disetujui">Ya,
                        Disetujui</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="modal_tolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Tolak Permohonan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <h5>Kajian Penolakan
                            <span class="required text-danger">*</span>
                        </h5>
                        <div class="controls">
                            <textarea name="message" id="message" class="form-control" required=""
                                placeholder="Isi kajian pernolakan permohonan" rows="5"></textarea>
                        </div>
                    </div>
                    <input type="hidden" id="id_usr" name="id_usr">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal" title="Batal">Batal
                    </button>
                    <button type="button" class="btn btn-info" onclick="tolakPermohonan()" title="Kirim">Kirim</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

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
        showDataTable("<?php echo e(base_url('bappeda/penelitian/dpmptsp/getdata/' . $status . '/tbl_data_rpl')); ?>");
    </script>

    <script>
        function showConfirmModal(data) {
            var id = $(data).data().id;
            $('#modal_confirm #id_usr').val(id);
            $('#modal_confirm').modal('show');
        }

        function showConfirmTolakModal() {
            $('#modal_confirm').modal('hide');
            var id = $('#modal_confirm #id_usr').val();
            $('#modal_tolak #message').val('');
            $('#modal_tolak #id_usr').val(id);
            $('#modal_tolak').modal('show');
        }

        function terimaPermohonan() {
            var id = $('#modal_confirm #id_usr').val();
            $(".loading-page").show();
            $('#modal_confirm').modal('hide');
            $.get("<?php echo e(base_url('bappeda/penelitian/dpmptsp/setuju')); ?>/" + id,
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        swal({
                            title: "Sukses!",
                            text: data.alert,
                            icon: 'success',
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            icon: "error",
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    }
                }
            );
        }

        function tolakPermohonan() {
            var id = $('#modal_tolak #id_usr').val();
            var msg = $('#modal_tolak #message').val();
            $(".loading-page").show();
            $('#modal_tolak').modal('hide');
            $.post("<?php echo e(base_url('bappeda/penelitian/dpmptsp/tolak')); ?>/" + id, {
                    message: msg
                },
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        swal({
                            title: "Sukses!",
                            text: data.alert,
                            icon: 'success',
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    } else {
                        swal({
                            title: "Gagal!",
                            text: data.alert,
                            icon: "error",
                            timer: 2000
                        }).then(function() {
                            $('#tbl_data_rpl').DataTable().ajax.reload(null,
                                false); //posisi paginantion tetap sesuai yang dibuka
                        });
                    }
                }
            );
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('content.penelitian.dpmptsp.modal_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/klinik/kpl_proses.blade.php ENDPATH**/ ?>