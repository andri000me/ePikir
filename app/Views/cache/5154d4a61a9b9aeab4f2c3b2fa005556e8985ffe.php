

<?php $__env->startSection('content'); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Profil</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Edit</a>
              </li>
              <li class="breadcrumb-item active">Profil
              </li>
            </ol>
          </div>
        </div>
      </div>

    </div>
    <div class="content-body"><!-- Basic CKEditor start -->


      <?php echo show_alert(); ?>


      <!-- Basic CKEditor start -->
      <section id="basic">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tambah Data Profil</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <?php echo form_open(base_url('bappeda/about/saveprofil'), 'class="form" id="formInputRp"'); ?>

                  <p>Silakan lengkapi data profil dibawah berdasarkan ketentuan yang berlaku untuk dapat dilihat.</p>
                  <div class="form-group">
                    <textarea name="profil_content" id="ckeditor" cols="50" rows="100" class="ckeditor" required><?php echo $content; ?></textarea>
                  </div>
                  <button type="submit" class="btn btn-info">Simpan Profil</button>
                  <?php echo form_close(); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Basic CKEditor end -->

    </div>
  </div>
</div>
<!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/fonts/simple-line-icons/style.css'); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
<!-- starts -->
<script src="<?php echo e(assets_url); ?>app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- ends -->
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
<script type="text/javascript">
CKEDITOR.replace('ckeditor', {
  toolbar: 'Custom', //makes all editors use this toolbar
  toolbarStartupExpanded : false,
  toolbarCanCollapse  : false,
  toolbar_Custom:  [
    { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-'] },
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
    { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar'] },
    { name: 'styles', items: ['Format', 'Font', 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
    { name: 'others', items: [ '-' ] },
  ] //define an empty array or whatever buttons you want.
});
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/profil/profil.blade.php ENDPATH**/ ?>