

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
                                        href="<?php echo e(base_url('bappeda/publikasi/berita')); ?>">Berita/Artikel</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/publikasi/berita')); ?>" class="btn btn-block btn-primary"><i
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
                                    <h4 class="card-title">Form Input Berita</h4>
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
                                        <?php echo form_open_multipart(base_url('bappeda/publikasi/berita/save'), 'class="form" id="formInputBerita"'); ?>


                                        <div class="col-md-12">
                                            <input type="hidden" name="id_berita"
                                                value="<?php echo e(isset($berita) && $berita != null ? encode($berita->id_berita) : ''); ?>">
                                            <div class="form-group">
                                                <label>Judul Berita</label>
                                                <input type="text" name="judul_berita" class="form-control"
                                                    placeholder="Judul Berita"
                                                    value="<?php echo e(isset($berita) && $berita != null ? $berita->judul_berita : ''); ?>"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label>Kategori Berita</label>
                                                <select name="id_kb" class="form-control select2" required>
                                                    <option value="" selected disabled="disabled">Pilih Kategori
                                                    </option>
                                                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e(encode($val->id_kb)); ?>"
                                                            <?php echo e(isset($berita) && $berita != null ? ($berita->id_kb == $val->id_kb ? 'selected' : '') : ''); ?>>
                                                            <?php echo e($val->nama_kategori); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Isi Berita</label>
                                                <textarea name="isi_berita" id="ckeditor" cols="50" rows="100"
                                                    class="ckeditor"
                                                    required><?php echo e(isset($berita) && $berita != null ? $berita->isi_berita : ''); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>File Foto</label>
                                                <input type="file" data-validation-required-message="Upload file struktur"
                                                    name="file_foto" class="dropify" data-height="150"
                                                    accept="image/*" data-max-file-size="2048K" data-min-width="300"
                                                    data-min-height="250" data-allowed-file-extensions="jpg png jpeg"
                                                    style="height: unset"
                                                    data-default-file="<?php echo e(isset($berita) && $berita != null ? base_url('upload/berita/' . $berita->file_foto) : ''); ?>"
                                                    <?php echo e(isset($berita) && $berita != null ? '' : 'required'); ?> />
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
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/dropify/dist/css/dropify.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/extensions/sweetalert.css'); ?>">
    <link rel="stylesheet" href="<?php echo e(assets_url . 'app-assets/vendors/css/forms/selects/select2.min.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style media="screen">
        .ui-datepicker-calendar {
            display: none;
        }

    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js_plugin'); ?>
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="<?php echo e(assets_url . 'app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
    <script src="<?php echo e(base_url('assets/js/ckeditor_config.js')); ?>" type="text/javascript"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>

    <script>
        $(".select2").select2();
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/berita/form_berita.blade.php ENDPATH**/ ?>