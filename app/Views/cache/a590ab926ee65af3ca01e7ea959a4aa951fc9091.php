

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-10 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Form Input</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Publikasi</a></li>
                                <li class="breadcrumb-item"><a
                                        href="<?php echo e(base_url('bappeda/publikasi/galeri')); ?>">Galeri</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/publikasi/galeri')); ?>" class="btn btn-block btn-primary"><i
                            class="la la-arrow-left"></i> Kembali</a>
                </div>

            </div>
            <div class="content-body">

                <?php echo show_alert(); ?>


                <section id="basic">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Input Galeri</h4>
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
                                        <?php echo form_open_multipart(base_url('bappeda/publikasi/galeri/save'), 'class="form" id="formInputGaleri"'); ?>


                                        <input type="hidden" name="id_galeri"
                                            value="<?php echo e(isset($galeri) && $galeri != null ? encode($galeri->id_galeri) : ''); ?>">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Judul Galeri</label>
                                                <input type="text" name="judul_galeri" class="form-control"
                                                    placeholder="Judul Galeri"
                                                    value="<?php echo e(isset($galeri) && $galeri != null ? $galeri->judul_galeri : ''); ?>"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label>Kategori Galeri</label>
                                                <select name="kg" class="form-control select2" required>
                                                    <option value="" selected disabled>Pilih Kategori
                                                    </option>
                                                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e(encode($val->id_kg)); ?>"
                                                            <?php echo e(isset($galeri) && $galeri != null ? ($val->id_kg == $galeri->id_kg ? 'selected' : '') : ''); ?>>
                                                            <?php echo e($val->nama_kategori); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Keterangan Galeri</label>
                                                <textarea name="ket_galeri" rows="2" class="form-control"
                                                    placeholder="Isi keterangan galeri"
                                                    required><?php echo e(isset($galeri) && $galeri != null ? $galeri->ket_galeri : ''); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <h5>Waktu Kegiatan
                                                    <span class="required text-danger">*</span>
                                                </h5>
                                                <div class="controls">
                                                    <input type="text" id="waktu_kegiatan" name="waktu_kegiatan"
                                                        class="form-control date-picker" autocomplete="off" required
                                                        placeholder="DD-MM-YYYY"
                                                        value="<?php echo e(isset($galeri) && $galeri != null ? date('d-m-Y', strtotime($galeri->waktu_kegiatan)) : date('d-m-Y')); ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>File Foto</label>
                                                <input type="file" data-validation-required-message="Upload file struktur"
                                                    name="file_foto" id="file_foto" class="dropify" data-height="150"
                                                    accept="image/*" data-max-file-size="2048K" data-min-width="300"
                                                    data-min-height="250" data-allowed-file-extensions="jpg png jpeg"
                                                    style="height: unset"
                                                    data-default-file="<?php echo e(isset($galeri) && $galeri != null ? base_url('upload/galeri/' . $galeri->file_foto) : ''); ?>"
                                                    <?php echo e(isset($galeri) && $galeri != null ? '' : 'required'); ?> />
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="switch" id="check_active"
                                                            data-group-cls="btn-group w-100" onchange="changeActive(this)"
                                                            <?php echo e(isset($galeri) && $galeri != null ? ($galeri->jenis_galeri == 2 ? 'checked' : '') : ''); ?> />
                                                    </div>
                                                </div>

                                                <input type="hidden" name="jenis_galeri" id="jenis_galeri"
                                                    value="<?php echo e(isset($galeri) && $galeri != null ? $galeri->jenis_galeri : '1'); ?>">

                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <input type="text" name="link_video" id="link_video"
                                                            class="form-control"
                                                            placeholder="Link video youtube, Example: https://youtu.be/5zSCWKKnajU"
                                                            value="<?php echo e(isset($galeri) && $galeri != null ? $galeri->link_video : ''); ?>"
                                                            <?php echo e(isset($galeri) && $galeri != null ? ($galeri->jenis_galeri == 2 ? 'required' : 'disabled') : 'disabled'); ?>>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3 offset-md-9">
                                            <button type="submit" class="btn btn-info btn-block">
                                                <i class="la la-save"></i> Simpan Data
                                            </button>
                                        </div>
                                        <?php echo form_close(); ?>

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

<?php $__env->startPush('css_plugin'); ?>
    <!-- Dropify -->
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css'); ?>">
    <!-- SweetAlert -->
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/extensions/sweetalert.css'); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css'); ?>">
    <!-- DatePicker -->
    <link rel="stylesheet"
        href="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/style-datepicker.css'); ?>">
    <!-- Switch -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/css/plugins/forms/switch.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <!-- Select2 -->
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo e(assets_url . 'app-assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
    <!-- Dropify -->
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <!-- SweetAlert -->
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <!-- Switch -->
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js'); ?>"
        type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
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
        $('.switch:checkbox').checkboxpicker({
            offLabel: 'Foto',
            onLabel: 'Video',
            offTitle: 'Galeri Foto',
            onTitle: 'Galeri Video',
            offActiveCls: 'btn-primary',
            onActiveCls: 'btn-danger',
            cls: "w-100",
            // reverse: true
        });
    </script>

    <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload file foto (<b>png/jpeg/jpg</b>).</center>',
                error: '<center>Maksimal ukuran file 2 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 2 MB.</center>',
            }
        });
    </script>

    <script>
        function changeActive(data) {
            var cek = $(data).is(':checked');
            if (cek) {
                $('#formInputGaleri #file_foto').attr('required', false);
                $('#formInputGaleri #link_video').attr('required', true);
                $('#formInputGaleri #link_video').attr('disabled', false);
                $('#formInputGaleri #jenis_galeri').val('2');
            } else {
                $('#formInputGaleri #file_foto').attr('required', true);
                $('#formInputGaleri #link_video').attr('required', false);
                $('#formInputGaleri #link_video').attr('disabled', true);
                $('#formInputGaleri #jenis_galeri').val('1');
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/galeri/form_galeri.blade.php ENDPATH**/ ?>