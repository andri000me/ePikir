<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($nav['header'] != null): ?>
                    <li class=" navigation-header">
                        <span><?php echo e($nav['header']); ?></span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                            data-placement="right" data-original-title="<?php echo e($nav['header']); ?>"></i>
                    </li>
                <?php else: ?>
                    <li class="nav-item <?php echo e($nav['index'] == $active ? 'active' : ''); ?>">
                        <a href="<?php echo e($nav['url']); ?>">
                            <i class="<?php echo e($nav['icon']); ?>"></i>
                            <span class="menu-title"><?php echo e($nav['title']); ?></span>
                        </a>
                        <?php if($nav['child'] != null): ?>
                            <ul class="menu-content">
                                <?php $__currentLoopData = $nav['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subnav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e($subnav['index'] == $active ? 'active' : ''); ?>">
                                        <a class="menu-item" href="<?php echo e($subnav['url']); ?>"><?php echo e($subnav['title']); ?>

                                            <?php if(isset($subnav['bubble'])): ?>
                                                <?php if($subnav['bubble'] != null): ?>
                                                    <?php if(isset($bubble[$subnav['bubble']])): ?>
                                                        <?php if($bubble[$subnav['bubble']]['count'] != null): ?>
                                                            <span
                                                                class="badge badge badge-<?php echo e($bubble[$subnav['bubble']]['color']); ?> badge-pill float-right"><?php echo e($bubble[$subnav['bubble']]['count']); ?></span>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </a>
                                        <?php if($subnav['child'] != null): ?>
                                            <ul class="menu-content">
                                                <?php $__currentLoopData = $subnav['child']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="<?php echo e($item['index'] == $active ? 'active' : ''); ?>">
                                                        <a class="menu-item"
                                                            href="<?php echo e($item['url']); ?>"><?php echo e($item['title']); ?>

                                                            <?php if(isset($item['bubble']) && $item['bubble'] != null): ?>
                                                                <?php if($item['bubble'] != null): ?>
                                                                    <?php if(isset($bubble[$item['bubble']])): ?>
                                                                        <?php if($bubble[$item['bubble']]['count'] != null): ?>
                                                                            <span
                                                                                class="badge badge badge-<?php echo e($bubble[$item['bubble']]['color']); ?> badge-pill float-right"><?php echo e($bubble[$item['bubble']]['count']); ?></span>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
</div>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Bappeda\Views/template/menu.blade.php ENDPATH**/ ?>