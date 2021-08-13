<!-- Start Header -->
<header id="header" class="header">
    <!-- Topbar -->
    
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Contact -->
                    <ul class="contact" style="margin-top: 0px !important; padding-block: 4px;">
                        <li><i class="fa fa-phone"></i> (0293) 45678910</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:litbang@gmail.com">litbang@gmail.com</a>
                        </li>
                        
                    </ul>
                    <!--/ End Contact -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="topbar-right">
                        
                        <!-- Social -->
                        <ul class="social" style="margin-top: 0px !important; padding-block: 4px;">
                            <li style="border-right: 1px solid #cccccc; border-left: 1px solid #cccccc;"><a
                                    href="<?php echo e(base_url('Auth')); ?>" style="padding-inline: 10px"><i
                                        class="fa fa-user"></i> Login</a></li>
                            
                        </ul>
                        <!--/ End Social -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Topbar -->
    <!-- Middle Bar -->
    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="javascript:void(0)">
                            <img src="<?php echo e(base_url('assets/img/logo/logo_kab_lg.png')); ?>" width="75" alt="logo">
                            <span class="d-lg-none d-xl-block">e-Pikir</span>
                        </a>
                    </div>
                    <div class="link"><a href="index.html"><span>e</span>Pikir</a></div>
                    <!--/ End Logo -->
                    <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-xl-10 col-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav class="navigation">
                            <ul class="nav menu" style="padding-right: 130px !important">
                                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e($nav['index'] == $active ? 'active' : ''); ?>"
                                        style="margin-right: 30px;">
                                        <a href="<?php echo e($nav['url']); ?>"><?php echo e($nav['title']); ?><i
                                                class="<?php echo e($nav['child'] != null ? 'fa fa-caret-down' : ''); ?>"></i></a>
                                        <?php if($nav['child'] != null): ?>
                                            <ul class="dropdown">
                                                <?php $__currentLoopData = $nav['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="<?php echo e($sub['index'] == $active ? 'active' : ''); ?>">
                                                        <a href="<?php echo e($sub['url']); ?>"><?php echo e($sub['title']); ?><i
                                                                class="<?php echo e($sub['child'] != null ? 'fa fa-caret-right' : ''); ?>"></i></a>
                                                        <?php if($sub['child'] != null): ?>
                                                            <ul class="dropdown submenu">
                                                                <?php $__currentLoopData = $sub['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li
                                                                        class="<?php echo e($sub2['index'] == $active ? 'active' : ''); ?>">
                                                                        <a
                                                                            href="<?php echo e($sub2['url']); ?>"><?php echo e($sub2['title']); ?></a>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </nav>
                        <!-- Button -->
                        <div class="button">
                            <a href="https://bappeda.magelangkab.go.id/" class="btn">BAPPEDA</a>
                        </div>
                        <!--/ End Button -->
                    </div>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Middle Bar -->
</header>
<!--/ End Header -->
<?php /**PATH D:\PROJECT\CODE IGNITER 4\epikir_new\app\Modules\Landing\Views/template/header.blade.php ENDPATH**/ ?>