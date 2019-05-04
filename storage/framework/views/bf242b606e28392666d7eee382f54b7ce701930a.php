
<?php $__env->startSection('meta'); ?>
    <div id="fb-root"></div>
    <address class="vcard" style="display:none">
        <img src='<?php echo e(asset('upload/logo.png')); ?>' title='Nhà xinh 360' alt='Nhà xinh 360' class="photo"/>
        <a class="url fn" href="<?php echo e(url('/')); ?>">Nhà xinh 360</a>
        <div class="adr">
            <div class="street-address"><?php echo e($system->address); ?></div>
        </div>
        <div class="tel"><?php echo e($system->phone); ?></div>
    </address>
    <div itemtype="http://schema.org/website ">
        <div itemtype="http://schema.org/website" itemscope="">
            <div>
                        <span itemprop="keywords">
                            <a rel="tag" href="<?php echo e(url('/')); ?>"></a>
                        </span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">

        <section class="so-spotlight1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="module moduleship">
                            <div class="modcontent clearfix">
                                <div class="row re-ship-phone">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon1"></span>
                                            <p class="des">
                                                <span>Tư vấn 24/7</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon2"></span>
                                            <p class="des">
                                                Vận chuyển
                                                <span>miễn phí</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon3"></span>
                                            <p class="des">
                                                Nhận hàng
                                                <span>Nhận tiền</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon4"></span>
                                            <p class="des">
                                                Gọi ngay
                                                <span><?php echo e($system->phone); ?></span>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Đặc điểm của công ty -->
        <section class="box-collection2 highLightProject">
            <div class="container">
                <div class="modcontent">
                    <div class="header-title">
                        <h3 class="modtitle">
                            <span><?php echo e($social->danhmuc1); ?></span>
                        </h3>
                    </div>
                    <div class="product-slider-2 product-thumb">
                        <?php if(!empty($thisFeatureProject)): ?>
                            <?php echo $thisFeatureProject; ?>

                        <?php else: ?>
                            <p>Chưa có dự án nổi bật</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!--Du an noi bat-->
        <section class="box-collection2 highLightProject">
            <div class="container">
                <div class="modcontent">
                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="header-title">
                                <h3 class="modtitle">
                                    <span><?php echo e($social->danhmuc2); ?></span>
                                </h3>
                            </div>
                            <div class="product-slider-3  product-thumb">
                                <?php if(!empty($thisFeatureProduct)): ?>
                                    <?php echo $thisFeatureProduct; ?>

                                <?php else: ?>
                                    <p>Chưa có dự án nổi bật </p>
                                <?php endif; ?>
                            </div>
                            <!-- San pham noi bat -->
                                <?php echo $htmlSlideProduct; ?>

                            <!-- Du an thi cong noi that -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-collection1">
            <div class="container">
                <div class=" modcontent">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 hidden-xs">
                            <div class="pre-text banner hidden-xs banner-slider">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .so-spotlight3 {
                background: url("<?php echo e(asset('views/template/src/newsletter-bgb09cb09c.jpg?v=180')); ?>") no-repeat center center;
            }
        </style>
        <section class="box_blog">
            <div class="container">
                <div class="modcontent" style="margin-bottom: 10px">
                    <div class="header-title">
                        <h3 class="modtitle">
                           <?php echo e($social->danhmuc8); ?>

                        </h3>
                    </div>
                    <div class="product-slider-5 product-thumb">
                        <?php if(!empty($thisNewNews)): ?>
                            <?php echo $thisNewNews; ?>

                        <?php else: ?>
                            <p>Chưa có tin mới</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tin tức mới -->
        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>