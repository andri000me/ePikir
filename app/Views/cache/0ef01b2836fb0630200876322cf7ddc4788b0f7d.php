

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Bidang</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active">Bidang</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-3 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/bidang/add')); ?>" class="btn btn-block btn-info"><i
                            class="la la-plus"></i> Tambah Data</a>
                </div>

            </div>
            <div class="content-body">

                <?php echo show_alert(); ?>


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List Bidang</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered table-responsive" id="list_tbl">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Aksi</th>
                                                    <th>Aktif</th>
                                                    <th>Nama Bidang</th>
                                                    <th>Keterangan</th>
                                                    <th>Icon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td align="center"><?php echo e($key + 1); ?></td>
                                                        <td nowrap align="center">
                                                            <button type="button" onclick="showModal(this)"
                                                                data-judul="<?php echo e($val->nama_bidang); ?>"
                                                                data-isi="<?php echo e($val->ket_bidang); ?>"
                                                                data-icon="<?php echo e($val->icon_bidang); ?>"
                                                                class="btn btn-sm btn-primary" title="Lihat Detail"><i
                                                                    class="la la-eye font-small-3"></i></button>
                                                            <a href="<?php echo e(base_url('bappeda/bidang/edit/' . encode($val->id_bidang))); ?>"
                                                                class="btn btn-info btn-sm" title="Update Data"><i
                                                                    class="la la-pencil-square-o font-small-3"></i></a>
                                                            <button type="button" onclick="hapusData(this, true)"
                                                                data-link="<?php echo e(base_url('bappeda/bidang/delete/' . encode($val->id_bidang))); ?>"
                                                                class="btn btn-sm btn-danger" title="Hapus Data"><i
                                                                    class="la la-trash-o font-small-3"></i></button>

                                                        </td>
                                                        <td align="center">
                                                            <input type="checkbox" class="switch" id="check_active"
                                                                data-group-cls="btn-group-sm"
                                                                data-id="<?php echo e(encode($val->id_bidang)); ?>"
                                                                onchange="changeActive(this)"
                                                                <?php echo e($val->active == 1 ? 'checked' : ''); ?> />
                                                        </td>
                                                        <td><?php echo character_limiter($val->nama_bidang, 50, '...'); ?></td>
                                                        <td><?php echo character_limiter($val->ket_bidang, 150, '...'); ?></td>
                                                        <td align="center">
                                                            <i class="<?php echo e($val->icon_bidang); ?>"
                                                                style="font-size: 20pt"></i>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
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
    <!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('modal'); ?>
    <div class="modal animated bounceInUp text-left" id="modal_view" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div id="modal_header" class="modal-header bg-primary">
                    <h4 class="modal-title white" id="modal_title">Detail Bidang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body" id="modal_body">
                    <div id="judul" class="h4 font-weight-bold">Nama Bidang</div>
                    <div id="icon">Icon Bidang</div>
                    <hr>
                    <div id="isi">
                        <p>Keterangan Bidang</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">KELUAR</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/extensions/sweetalert.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/DataTables/datatables.min.css')); ?>" />
    <!-- Fancybox -->
    
    <!-- Switch -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/css/plugins/forms/switch.css'); ?>">
    <!-- Toast -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/vendors/css/extensions/toastr.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/css/plugins/extensions/toastr.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        .xIMG {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .xIMG:hover {
            opacity: 0.7;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script type="text/javascript" src="<?php echo e(base_url('assets/external/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/sweetalert.min.js'); ?>" type="text/javascript">
    </script>
    <!-- Fancybox -->
    
    <!-- Switch -->
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js'); ?>"
        type="text/javascript"></script>
    <!-- Toast -->
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/extensions/toastr.min.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo e(base_url('assets/js/delete_data.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        $('#list_tbl').dataTable();
    </script>

    

    <script>
        $('.switch:checkbox').checkboxpicker({
            offLabel: 'No',
            onLabel: 'Yes',
            offTitle: 'Tidak Aktif',
            onTitle: 'Aktif',
            // reverse: true
        });
    </script>

    <script>
        function changeActive(data) {
            $(".loading-page").show();
            var cek = $(data).is(':checked');
            var id = $(data).data().id;
            var act = 0;
            var checked = true;
            if (cek) {
                act = 1;
                checked = false;
            }
            $.get("<?php echo e(base_url('bappeda/bidang/active/')); ?>/" + act + '/' + id,
                function(dt) {
                    var data = JSON.parse(dt);
                    $(".loading-page").hide();

                    if (data.respons) {
                        toastr.success(data.alert, 'Sukses!', {
                            "closeButton": true
                        });
                    } else {
                        // $('#check_active').attr('checked', checked).change();
                        toastr.error(data.alert, 'Gagal!', {
                            "closeButton": true
                        });
                    }
                }
            );
        }
    </script>

    <script>
        function showModal(data) {
            var judul = $(data).data().judul;
            var isi = $(data).data().isi;
            var icon = $(data).data().icon;

            $('#modal_view #modal_body #judul').html(judul);
            $('#modal_view #modal_body #icon').html(
                '<i class="' + icon + '" style="font-size: 20pt;"></i>'
            );
            $('#modal_view #modal_body #isi').html('<p class="text-justify">' + isi + '</p>');

            $('#modal_view').modal({
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/bidang/list_bidang.blade.php ENDPATH**/ ?>