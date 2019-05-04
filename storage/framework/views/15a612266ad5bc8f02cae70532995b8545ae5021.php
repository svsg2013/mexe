<div class="col-xs-12 col-sm-4 col-md-3">
    <div class="col-post">
        <div class="header-title">
            <h3 class="modtitle"><span>Danh mục</span>&nbsp;<span>Thiết kế</span></h3>
        </div>
        <ul class="post-menu">
            <?php if(!empty($thisCateHere)): ?>
                <?php echo $thisCateHere; ?>

                <?php else: ?>
                <li class="cat-item"><a href="<?php echo e(route('homePage')); ?>" data-name="trang-chu" data-title="Trang chủ">Chưa có danh mục Dự án</a></li>
                <?php endif; ?>
        </ul>
    </div>
    <div class="col-post">
        <h3>Thiết kế nổi bật</h3>
        <ul class="post-menu">
            <?php if(!empty($thisHot)): ?>
                <?php echo $thisHot; ?>

                <?php else: ?>
                <li><a href="javascript:void(0)">Chưa có Dự án nổi bật</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php echo $__env->make('flexshop.partial.project.bannerLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>