

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
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda/publikasi/renja')); ?>">Rencana
                                        Kerja</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/publikasi/renja')); ?>" class="btn btn-block btn-primary"><i
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
                                    <h4 class="card-title">Form Input Rencana Kerja</h4>
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
                                        <?php echo form_open_multipart(base_url('bappeda/publikasi/renja/save'), 'class="form" id="formInputRenja"'); ?>


                                        <div class="col-md-12">
                                            <input type="hidden" name="id_rk"
                                                value="<?php echo e(isset($renja) && $renja != null ? encode($renja->id_rk) : ''); ?>">

                                            <div class="form-group">
                                                <label>Tahun Rencana Kerja</label>
                                                <input type="text" name="tahun_rk" class="form-control" maxlength="4"
                                                    onkeypress="return isNumber(event)" placeholder="Tahun Rencana Kerja"
                                                    value="<?php echo e(isset($renja) && $renja != null ? $renja->tahun_rk : date('Y')); ?>"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label>File Rencana Kerja (pdf)</label>
                                                <input type="file" data-validation-required-message="Upload file lampiran"
                                                    name="file_rk" class="dropify" data-height="150"
                                                    accept="application/pdf" data-max-file-size="5120K" data-min-width="300"
                                                    data-min-height="250" data-allowed-file-extensions="pdf"
                                                    style="height: unset"
                                                    data-default-file="<?php echo e(isset($renja) && $renja != null ? base_url('upload/renja/' . $renja->file_rk) : ''); ?>"
                                                    <?php echo e(isset($renja) && $renja != null ? '' : 'required'); ?> />
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
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script src="<?php echo e(assets_url); ?>app-assets/vendors/dropify/dist/js/dropify.min.js"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script type="text/javascript">
        var drEvent = $('.dropify').dropify({
            messages: {
                default: '<center>Upload file (<b>.pdf</b>).</center>',
                error: '<center>Maksimal ukuran file 5 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 5 MB.</center>',
            }
        });
    </script>

    <script type="text/javascript">
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/rencanakerja/form_renja.blade.php ENDPATH**/ ?>