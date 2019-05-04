<div class="col-xs-12 col-sm-4 col-md-3">
    <div class=" left-menu">
        <?php echo $__env->make('flexshop.partial.product.searchBox', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php if(!empty($flag)): ?>
            <?php echo e(null); ?>

        <?php else: ?>
            <div class="box-colection">
                <div class="title-collection-menu-l">Danh mục</div>
                <ul class="list-collections list-cate-banner list-index">
                    <?php if(!empty($thisCateProduct)): ?>
                        <?php echo $thisCateProduct; ?>

                    <?php else: ?>
                        <li class="menu_lv1 item-sub-cat"><a href="javascript:void(0)" ><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chưa có danh sách</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
    <?php echo $__env->make('flexshop.partial.product.bannerLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>