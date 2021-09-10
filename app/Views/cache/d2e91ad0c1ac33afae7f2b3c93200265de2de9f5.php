

<?php $__env->startSection('content'); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-10 col-12 mb-2 breadcrumb-new">
        <h3 class="content-header-title mb-0 d-inline-block">Galeri</h3>
        <div class="row breadcrumbs-top d-inline-block">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Edit</a>
              </li>
              <li class="breadcrumb-item active">Galeri
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <a href="<?php echo e(base_url('bappeda/galeri/add')); ?>" class="btn btn-info btn-block"><i class="ft-plus"></i> Tambah Data</a>
      </div>
    </div>
    <div class="content-body"><!-- Basic CKEditor start -->


      <?php echo show_alert(); ?>


      <!-- Zero configuration table -->
      <section id="configuration">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Galeri Tabel</h4>
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
                  <table class="table table-striped table-bordered zero-configuration" id="tbl_regulasi">
                    <thead>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Judul Galeri</th>
                        <th>Keterangan Galeri</th>
                        <th>Waktu Kegiatan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td align="center"><?php echo e($key + 1); ?></td>
                        <td align="center"><?php echo e($val->judul_galeri); ?></td>
                        <td><?php echo e($val->ket_galeri); ?></td>
                        <td align="center"><?php echo e(date("d F Y", strtotime($val->waktu_kegiatan))); ?></td>
                        <td>
                          <a href="<?php echo e(base_url('bappeda/galeri/galeridelete/' . encode($val->id_galeri))); ?>" class="h5 btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          <a href="<?php echo e(base_url('bappeda/galeri/galeriedit/' . encode($val->id_galeri))); ?>" class="h5 btn btn-info btn-sm"><i class="fa fa-pencil-square-o"></i></a>
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
      <!--/ Zero configuration table -->
    </div>
  </div>
</div>
<!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(assets_url . 'app-assets/fonts/simple-line-icons/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/DataTables/datatables.min.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
<!-- starts -->
<script src="<?php echo e(assets_url); ?>app-assets/vendors/js/editors/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(base_url('assets/external/DataTables/datatables.min.js')); ?>"></script>
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

<script>
$('#tbl_regulasi').dataTable();
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/content/galeri/index.blade.php ENDPATH**/ ?>