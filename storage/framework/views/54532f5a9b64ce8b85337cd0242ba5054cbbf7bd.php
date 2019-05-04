<?php $__env->startSection('meta'); ?>
    <title><?php echo e($system->title); ?> |
        <?php if($flag==1): ?>
            <?php echo e('Tuyển Dụng'); ?>

        <?php elseif($flag==2): ?>
            <?php echo e('Báo Giá'); ?>

        <?php endif; ?>
    </title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">
        <?php echo $__env->make('flexshop.partial.bannerTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section style="background:#fff">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('homePage')); ?>" data-name="trang-chu" data-title="Trang chủ"><i
                                        class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li>
                            <?php if($flag==1): ?>
                                <?php echo e('Tuyển Dụng'); ?>

                            <?php elseif($flag==2): ?>
                                <?php echo e('Báo Giá'); ?>

                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page_title">
                        <?php if($flag==1): ?>
                            <?php echo e('Tuyển Dụng'); ?>

                        <?php elseif($flag==2): ?>
                            <?php echo e('Báo Giá'); ?>

                        <?php endif; ?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="contact_map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if(!empty($thisPost)): ?>
                        <?php echo $thisPost; ?>

                    <?php elseif($flag==1): ?>
                        <h2>Chưa có nội dung Tuyển dụng</h2>
                    <?php elseif($flag==2): ?>
                        <h2>Chưa có Báo giá mới</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
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