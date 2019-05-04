<?php if(!empty($banner->metaName)): ?>
    <section class="bannerNew">
        <div class="bannerNew__image" style="background-image: url(<?php echo e(asset('upload/thumbnail/'.$banner->metaName)); ?>)">
            <img src="<?php echo e(asset('upload/thumbnail/'.$banner->metaName)); ?>" alt="">
        </div>
    </section>
<?php else: ?>
    <section class="bannerNew">
        <div class="bannerNew__image" style="background-image: url(<?php echo e(asset('upload/thumbnail/quy-trinh-thiet-ke.jpg')); ?>)">
            <img src="<?php echo e(asset('upload/thumbnail/quy-trinh-thiet-ke.jpg')); ?>" alt="">
        </div>
    </section>
<?php endif; ?>