
<?php $__env->startSection('title'); ?><?php echo e($meta->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?><?php echo e($meta->description); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('image'); ?><?php echo e($meta->image); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-container">
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 150) {
                        $('.header').addClass('fixmenu');
                    } else {
                        $('.header').removeClass('fixmenu');
                    }
                })
            })
        </script>
        <style>
            nav.navbar.menumain.visible-xs.mobile-menu {
                margin: 0;
                padding: 11px 0;
            }
            nav.navbar.menumain.visible-xs.mobile-menu .navbar-toggle {
                margin: 5px 15px;
                border-radius: 0;
                border: 0;
                background: rgba(255, 255, 255, 0.48);
            }
            nav.navbar.menumain.visible-xs.mobile-menu .navbar-toggle span {
                background: #3ab54a;
            }
        </style>
        <div class="contentAjax">
            <?php echo $__env->make('flexshop.partial.bannerTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <section style="background:#fff">
                <div class="container">
                    <?php if(!empty($thisBreadcrumb)): ?>
                        <?php echo $thisBreadcrumb; ?>

                    <?php else: ?>
                        <div class="breadcrumbs">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo e(route('homePage')); ?>" data-name="trang-chu" data-title="Trang chủ"><i
                                                class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                                <li>Tin</li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
            <div class="page_collection">
                <div class="container">
                    <div class="row content-blog-list">
                        <?php echo $__env->make('flexshop.partial.fengshui.navLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <?php echo $thisPost; ?>

                            <?php if($thisSlideProduct != ""): ?>
                                <div class="header-title">
                                    <h3 class="modtitle">
                                        SẢN PHẨM LIÊN QUAN
                                    </h3>
                                </div>
                                <div class="product-slider-1  product-thumb">
                                    <?php if(isset($thisSlideProduct)): ?>
                                        <?php echo $thisSlideProduct; ?>

                                    <?php endif; ?>
                                </div>
                                <?php else: ?>
                                <?php echo e(""); ?>

                            <?php endif; ?>
                        </div>
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
    </div><!-- This page container -->
    <?php echo $jsonLD; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>