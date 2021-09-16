

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
                                <li class="breadcrumb-item"><a href="<?php echo e(base_url('bappeda/carousel')); ?>">Carousel</a></li>
                                <li class="breadcrumb-item active">Form Input</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="content-header-right col-md-2 col-12 mb-2">
                    <a href="<?php echo e(base_url('bappeda/carousel')); ?>" class="btn btn-block btn-primary"><i
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
                                    <h4 class="card-title">Form Input Carousel</h4>
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
                                        <?php echo form_open_multipart(base_url('bappeda/carousel/save'), 'class="form" id="formInputCarousel"'); ?>


                                        <div class="col-md-12">
                                            <input type="hidden" name="id_carousel"
                                                value="<?php echo e(isset($carousel) && $carousel != null ? encode($carousel->id_carousel) : ''); ?>">

                                            <div class="form-group">
                                                <label>Judul Carousel</label>
                                                <textarea name="judul_carousel" id="judul_carousel" cols="50" rows="10"
                                                    class="ckeditor"
                                                    required><?php echo e(isset($carousel) && $carousel != null ? $carousel->judul_carousel : ''); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Keterangan Carousel</label>
                                                <textarea name="ket_carousel" id="ket_carousel" cols="50" rows="10"
                                                    class="ckeditor"
                                                    required><?php echo e(isset($carousel) && $carousel != null ? $carousel->ket_carousel : ''); ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>File Foto</label>
                                                <input type="file"
                                                    data-validation-required-message="Upload file foto carousel"
                                                    name="file_carousel" class="dropify" data-height="150"
                                                    accept="image/*" data-max-file-size="2048K" data-min-width="300"
                                                    data-min-height="250" data-allowed-file-extensions="jpg png jpeg"
                                                    style="height: unset"
                                                    data-default-file="<?php echo e(isset($carousel) && $carousel != null ? base_url('upload/slider/' . $carousel->file_carousel) : ''); ?>"
                                                    <?php echo e(isset($carousel) && $carousel != null ? '' : 'required'); ?> />
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
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>

    <script>
        $(".select2").select2();
    </script>

    <script>
        var ck_config = {
            height: '15vh',
            autoParagraph: false,
            enterMode: CKEDITOR.ENTER_BR,
            // shiftEnterMode: CKEDITOR.ENTER_P,
            toolbar: 'Custom', //makes all editors use this toolbar
            toolbarStartupExpanded: false,
            toolbarCanCollapse: false,
            toolbar_Custom: [{
                    name: 'document',
                    groups: ['mode', 'document', 'doctools']
                },
                {
                    name: 'clipboard',
                    groups: ['clipboard', 'undo'],
                    items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
                },
                {
                    name: 'editing',
                    groups: ['find', 'selection', 'spellchecker'],
                    items: ['Find', 'Replace', '-', 'SelectAll', '-']
                },
                {
                    name: 'basicstyles',
                    groups: ['basicstyles', 'cleanup'],
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-',
                        'CopyFormatting', 'RemoveFormat'
                    ]
                },
                {
                    name: 'paragraph',
                    groups: ['list', 'blocks'],
                    items: ['NumberedList', 'BulletedList', '-', 'Blockquote']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                // {
                //     name: 'insert',
                //     items: ['Table', 'HorizontalRule', 'Smiley', 'SpecialChar']
                // },
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'others',
                    items: ['-']
                },
            ] //define an empty array or whatever buttons you want.
        };

        CKEDITOR.replace('judul_carousel', ck_config);
        CKEDITOR.replace('ket_carousel', ck_config);
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

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/carousel/form_carousel.blade.php ENDPATH**/ ?>