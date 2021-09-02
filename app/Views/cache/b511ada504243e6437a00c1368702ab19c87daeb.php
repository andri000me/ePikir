

<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">

                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Permohonan Masuk</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('kesbangpol') ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Permohonan Masuk</li>
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
                                                    <th>Aksi</th>
                                                    <th>Lampiran</th>
                                                    <th>Nomor</th>
                                                    <th>Tgl Pengajuan</th>
                                                    <th>Nama</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>Lokasi</th>
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
    <div class="modal animated bounceInUp text-left" id="modal_detail" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Permohonan Rekomendasi Penelitian</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    
                    <table id="tbl_detail_rpl"
                        class="table table-hover table-bordered table-striped table-responsive d-lg-table">
                        <thead> </thead>
                    </table>

                    <div id="lampiran"> </div>
                </div>

                <div class="modal-footer">
                    <!-- <button type="button" id="btn_reset" class="btn btn-success waves-effect" onclick="tableToExcel('tbl_rincian', 'RincianBarangPengadaan', 'RincianBarangPengadaan.xls')">EXPORT (.XLS)</button> -->
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
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
        showDataTable("<?php echo e(base_url('kesbangpol/penelitian/getdata/' . $status . '/tbl_data_rpl')); ?>");
    </script>

    <script>
        function showDetailModal(data) {
            var id = $(data).data().id;
            var nama = $(data).data().nama;
            var pekerjaan = $(data).data().pekerjaan;
            var alamat = $(data).data().alamat;
            var hp = $(data).data().hp;
            var email = $(data).data().email;
            var norpl = $(data).data().norpl;
            var penanggung = $(data).data().penanggung;
            var lokasi = $(data).data().lokasi;
            var tujuan = $(data).data().tujuan;
            var file = $(data).data().file;
            var mulai = $(data).data().mulai;
            var akhir = $(data).data().akhir;
            var pengajuan = $(data).data().pengajuan;

            var tglpelaksana = mulai + " - " + akhir;
            if (mulai == akhir) {
                var tglpelaksana = mulai;
            }

            var list = "<tr> <th> Nomor </th> <td>" + norpl + "</td> </tr>" +
                "<tr> <th> Nama Lengkap </th> <td>" + nama + "</td> </tr>" +
                "<tr> <th> Pekerjaan </th> <td>" + pekerjaan + "</td> </tr>" +
                "<tr> <th> Alamat </th> <td>" + alamat + "</td> </tr>" +
                "<tr> <th> Nomor HP </th> <td>" + hp + "</td> </tr>" +
                "<tr> <th> Email </th> <td>" + email + "</td> </tr>" +
                "<tr> <th> Penanggung Jawab </th> <td>" + penanggung + "</td> </tr>" +
                "<tr> <th> Lokasi Penelitian</th> <td>" + lokasi + "</td> </tr>" +
                "<tr> <th> Tujuan Penelitian </th> <td>" + tujuan + "</td> </tr>" +
                "<tr> <th> Tanggal Pelaksanaan </th> <td>" + tglpelaksana + "</td> </tr>" +
                "<tr> <th> Waktu Pengajuan </th> <td>" + pengajuan + "</td> </tr>";

            // var lampiran = '<iframe src="<?php echo e(base_url('upload/permohonan/rpl')); ?>/' + file +
            //     '" style = "width:100%; height:80vh;" frameborder = "0" > < /iframe>';

            var embed =
                '<iframe src="https://docs.google.com/gview?url=<?php echo e(base_url('upload/permohonan/rpl')); ?>/' + file +
                '&embedded=true" style = "width:100%; height:80vh;"></iframe>';

            $('#modal_detail #tbl_detail_rpl thead').html(list);
            $('#modal_detail #lampiran').html(embed);
            $('#modal_detail').modal({
                backdrop: 'static',
                keyboard: false
            });

        }
    </script>

    <script>
        function cetakSuratRpl(data) {
            var id = $(data).data().id;
            window.open("<?php echo e(base_url('kesbangpol/penelitian/cetak')); ?>/" + id);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Kesbangpol\Views/content/penelitian/rpl_selesai.blade.php ENDPATH**/ ?>