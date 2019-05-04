<div class="col-xs-12 col-sm-4 col-md-3">
    <div class="col-post">
        <div class="header-title">
            <h3 class="modtitle"><span>Tin</span>&nbsp;<span>nổi bật</span></h3>
        </div>
        <ul class="post-menu">
            <?php if(!empty($thisHot)): ?>
                <?php echo $thisHot; ?>

            <?php else: ?>
                <li><a href="javascript:void(0)">Chưa có Dự án nổi bật</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <?php echo $__env->make('flexshop.partial.fengshui.bannerLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>