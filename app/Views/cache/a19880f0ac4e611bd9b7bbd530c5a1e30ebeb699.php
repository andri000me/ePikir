

<?php $__env->startSection('content'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Struktur Organisasi</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda')); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Profil</a></li>
                                <li class="breadcrumb-item active">Struktur Organisasi</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <?php echo show_alert(); ?>


                <section id="basic">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Upload Foto</h4>
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
                                        <?php echo form_open_multipart(base_url('bappeda/profil/organisasi/save'), 'class="form" id="formInputProfil"'); ?>


                                        <div class="form-group">
                                            <input type="file" data-validation-required-message="Upload file struktur"
                                                name="file_struktur" class="dropify" data-height="400"
                                                accept="image/*" data-max-file-size="2048K" data-min-width="300"
                                                data-min-height="250" data-allowed-file-extensions="jpg png jpeg"
                                                style="height: unset"
                                                data-default-file="<?php echo e(base_url('upload/profil/' . $image)); ?>" required />
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
                default: '<center>Upload file foto (<b>png/jpeg/jpg</b>).</center>',
                error: '<center>Maksimal ukuran file 2 MB.</center>',
            },
            error: {
                fileSize: '<center>Maksimal ukuran file 2 MB.</center>',
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/profil/struktur.blade.php ENDPATH**/ ?>