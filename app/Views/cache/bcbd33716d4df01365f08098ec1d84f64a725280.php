

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template.breadcumbs',['group' => 'Litbang', 'label' => 'Hasil Penelitian'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- About Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Litbang</span>
                        <h1>Hasil Penelitian</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="d-none d-md-block" style="height: 65px"></div>
                    <!-- About Content -->
                    <div class="about-content profil text-justify row">
                        <div class="col-md-9">
                            <div class="col-md-12 card pt-3">
                                <table id="tbl_litbang" class="table table-hover table-bordered table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Peraturan</th>
                                            <th>Tentang</th>
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $regulasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td align="center"><?php echo e($key + 1); ?></td>
                                                <td nowrap>
                                                    <a href="<?php echo e(base_url('landing/regulasi/detail/' . encode($val->id_regulasi))); ?>"
                                                        title="Lihat Dokumen"
                                                        class="text-danger"><?php echo e($val->nama_regulasi); ?></a>
                                                </td>
                                                <td><?php echo e($val->isi_regulasi); ?></td>
                                                <td align="center"><a
                                                        href="<?php echo e(base_url('upload/regulasi/' . $val->file_regulasi)); ?>"
                                                        title="Download" class="h4"><i
                                                            class="fa fa-file-pdf-o text-danger"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-main" style="padding: 15px;">
                                <div class="text-content">
                                    <h2><span>Filter Pencarian</span></h2>
                                </div>
                                <?php echo form_open(base_url('landing/hasilpenelitian')); ?>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="select-nice" name="tahun">
                                                <option class="option" value="2021">2021</option>
                                                <option class="option" value="2020">2020</option>
                                                <option class="option" value="2019">2019</option>
                                                <option class="option" value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn primary"> <i class="fa fa-search"></i>
                                                Cari</button>
                                        </div>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End About Content -->
            </div>
        </div>
        </div>
    </section>
    <!--/ End About Us -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css_plugin'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/DataTables/datatables.min.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css_style'); ?>
    <style>
        .page-item.active .page-link {
            background-color: #ff9800;
            border-color: #dc890d;
        }

        .page-link {
            color: #ff9800;
        }

        .blogs-main.archives {
            padding: 0px;
        }

        /* .text-content h2 i {
                margin-right: 10px;
                width: 30px;
                height: 30px;
                line-height: 30px;
                border-radius: 100%;
                color: #fff;
                text-align: center;
                font-size: 14px;
                background: #ff9800;
            } */

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_plugin'); ?>
    <script type="text/javascript" src="<?php echo e(base_url('assets/external/DataTables/datatables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(base_url('assets/js/datatable_option.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js_script'); ?>
    <script>
        createDataTable('tbl_litbang', false);
    </script>

    <script>
        $('#tbl_litbang_info').parent().parent().css("padding-block", "30px");
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/litbang/penelitian.blade.php ENDPATH**/ ?>