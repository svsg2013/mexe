<?php $__env->startSection('meta'); ?>
    <title><?php echo e($system->title); ?> | <?php echo e($slugData->name); ?></title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">
        <?php echo $__env->make('flexshop.partial.bannerTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section class="introdutionPage" style="background-image:url('<?php echo e(asset('upload/thumbnail/'.$banner->background)); ?>')">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('homePage')); ?>" data-name="trang-chu" data-title="Trang chủ"><i
                                        class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li><?php echo e($slugData->name); ?></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 class-center title">
                        <h2 class="page_title"><?php echo e($slugData->name); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 class-center">
                        <?php if(!empty($slugData->content)): ?>
                            <?php echo $slugData->content; ?>

                        <?php else: ?>
                            <h2>Đang chờ cập nhật dữ liệu</h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .contact-info .shop-name .icon {
                float: left;
                height: 45px;
                width: 35px;
                background: url(<?php echo e(asset('views/template/hstatic.net/581/1000123581/1000171890/icon_shopb09cb09c.png?v=180')); ?>) no-repeat 0px 0px/35px;
                margin-right: 9px;
                margin-top: 5px;
            }
        </style>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>