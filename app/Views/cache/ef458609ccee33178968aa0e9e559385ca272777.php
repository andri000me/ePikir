

<?php $__env->startSection('content'); ?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs"
        style="background-image: url(<?php echo e(assets_front . 'images/background/wall-dark.jpg'); ?>); background-repeat: repeat; background-size: auto;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <ul>
                        <li><a href="<?php echo e(base_url('landing/home')); ?>"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-clone"></i>Publikasi</a></li>
                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-clone"></i>Agenda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <span class="title-bg">Publikasi</span>
                        <h1>Agenda</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- About Content -->
                    <div class="about-content profil blogs-main archives text-justify"
                        style="background: none; margin-top: 10px;">

                        <div class="single-sidebar post-tab">
                            <!-- Tab Nav -->
                            <div class="row">
                                <div class="col-md-3"></div>
                                <ul class="nav nav-tabs justify-content-center col-md-6" id="myTab" role="tablist">
                                    <li class="nav-item col-md-6 mb-3">
                                        <a class="nav-link text-center active" data-toggle="tab" href="#perBulan" role="tab"
                                            style="border-radius: 30px;">
                                            <i class="fa fa-calendar-check-o"></i>Timeline</a>
                                    </li>
                                    <li class="nav-item col-md-6">
                                        <a class="nav-link text-center" data-toggle="tab" href="#perTahun" role="tab"
                                            style="border-radius: 30px;">
                                            <i class="fa fa-calendar"></i>Kalender</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ End Tab Nav -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Agenda Per Bulan -->
                                <div class="tab-pane fade show active" id="perBulan" role="tabpanel">
                                    <h4 class="text-center"><?php echo e(showBulan(date('Y-m-d'))); ?></h4>
                                    <!-- Timeline agenda per bulan-->
                                    <div class="timeline">
                                        <?php
                                            //merubah string menjadi bilangan desimal
                                            $jml_agenda = floatval('0.' . (count($agenda_bln) * 2 + 4));
                                        ?>
                                        <?php $__currentLoopData = $agenda_bln; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <?php if($index % 3 == 0): ?>
                                                <?php
                                                    $type = 'type1';
                                                ?>
                                            <?php elseif($index % 3 == 1): ?>
                                                <?php
                                                    $type = 'type2';
                                                ?>
                                            <?php else: ?>
                                                <?php
                                                    $type = 'type3';
                                                ?>
                                            <?php endif; ?>

                                            
                                            <?php if($index % 2 == 0): ?>
                                                <?php
                                                    $fade = 'fadeInLeft';
                                                ?>
                                            <?php else: ?>
                                                <?php
                                                    $fade = 'fadeInRight';
                                                ?>
                                            <?php endif; ?>

                                            <div class="timeline__event animated wow <?php echo e($fade); ?> timeline__event--<?php echo e($type); ?>"
                                                data-wow-delay="<?php echo e($jml_agenda); ?>s">
                                                <div class="timeline__event__icon ">
                                                    <i class="fa fa-calendar-check-o"></i>
                                                </div>
                                                <div class="timeline__event__date">
                                                    <?php echo e(date('d/m/Y', strtotime($item->waktu_awal)) == date('d/m/Y', strtotime($item->waktu_akhir)) ? date('d', strtotime($item->waktu_awal)) . ' ' . date('M', strtotime($item->waktu_awal)) : date('d', strtotime($item->waktu_awal)) . ' ' . date('M', strtotime($item->waktu_awal)) . ' - ' . date('d', strtotime($item->waktu_akhir)) . ' ' . date('M', strtotime($item->waktu_akhir))); ?>

                                                </div>
                                                <div class="timeline__event__content"
                                                    style="<?php echo e(date('Y-m-d', strtotime($item->waktu_awal)) == date('Y-m-d') ? 'background: #f6eca4 !important' : ''); ?>">
                                                    <div class="timeline__event__title">
                                                        <?php echo e($item->judul_agenda); ?>

                                                    </div>
                                                    <div class="timeline__event__description">
                                                        <p><?php echo $item->isi_agenda; ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                                //setiap looping akan bertambah 0.2 detik
                                                $jml_agenda += 0.2;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <!--/ End Agenda Per Bulan -->
                                <!-- Agenda Per Tahun -->
                                <div class="tab-pane fade show" id="perTahun" role="tabpanel">
                                    
                                    <iframe src="<?php echo e(base_url('landing/calendar')); ?>" style="width:100%; height:135vh;"
                                        frameborder="0" id="agenda_calendar"></iframe>
                                </div>
                                <!--/ End Agenda Per Tahun -->
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
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/css/timeline.css')); ?>" />
    
<?php $__env->stopPush(); ?>





<?php $__env->startPush('js_script'); ?>
    

    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/agenda.blade.php ENDPATH**/ ?>