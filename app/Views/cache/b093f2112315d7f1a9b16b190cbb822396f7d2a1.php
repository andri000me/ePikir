

<?php $__env->startSection('content'); ?>
    <!-- Slider Content-->
    <?php echo $__env->make('content/beranda/slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Divider-->
    

    <!-- Bidang Content-->
    <?php echo $__env->make('content/beranda/bidang', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Info Content-->
    <?php echo $__env->make('content/beranda/info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Grafik Content-->
    <?php echo $__env->make('content/beranda/grafik', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Berita Content-->
    <?php echo $__env->make('content/beranda/berita', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Galeri Content -->
    <?php echo $__env->make('content/beranda/galeri', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\CODE IGNITER 4\epikir_new\app\Modules\Landing\Views/content/beranda/content.blade.php ENDPATH**/ ?>