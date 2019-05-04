<?php if($errors->any()): ?>
    <div class="alert alert-danger alert-dismissible fade in fadeout" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php if(session('thongbao')): ?>
    <div class="alert alert-success alert-dismissible fade in fadeout" role="alert">
        <strong><?php echo e(session('thongbao')); ?></strong> successfully!
    </div>
<?php endif; ?>
<?php if(session('thongbaoloi')): ?>
    <div class="alert alert-danger alert-dismissible fade in fadeout" role="alert">
        <strong><?php echo e(session('thongbaoloi')); ?></strong>, phải xóa hết mục con
    </div>
<?php endif; ?>


