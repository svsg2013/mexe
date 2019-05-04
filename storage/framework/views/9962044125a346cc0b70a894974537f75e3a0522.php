<?php $__env->startSection('meta'); ?>
    <base href="<?php echo e(url('/')); ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('upload/'.$system->logo)); ?>"/>
    <title>Nhà xinh 360 | Trang chủ</title>
    <script type="text/javascript" src="<?php echo e(asset('admin/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
    <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('admin/plugins/font-awesome/css/font-awesome.min.css')); ?>"/>
    <script type="text/javascript" src="<?php echo e(asset('views/template/src/bootstrap.minb09c.js')); ?>"></script>
    <link
            href="<?php echo e(asset('views/template/src/bootstrap.minb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <script
            defer="defer"
            type="text/javascript"
            src="<?php echo e(asset('admin/plugins/nprogress/nprogress.js')); ?>"></script>
    <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('admin/plugins/nprogress/nprogress.css')); ?>"/>
    <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('admin/plugins/bootstrap-dropdown/css/animate.min.css')); ?>"/>
    <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo e(asset('admin/plugins/bootstrap-dropdown/css/bootstrap-dropdownhover.min.css')); ?>"/>
    <script
            defer="defer"
            type="text/javascript"
            src="<?php echo e(asset('admin/plugins/bootstrap-dropdown/js/bootstrap-dropdownhover.min.js')); ?>"></script>
    <script defer="defer" type="text/javascript" src="<?php echo e(asset('admin/plugins/wow/wow.min.js')); ?>"></script>
    <script defer="defer" type="text/javascript" src="<?php echo e(asset('admin/assets/js/custom.js')); ?>"></script>
    <link
            href="<?php echo e(asset('views/template/src/filecssb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href="<?php echo e(asset('views/template/src/owl.carouselb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href="<?php echo e(asset('views/template/src/dq.scssb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href="<?php echo e(asset('views/template/src/font-awesomeb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href="<?php echo e(asset('views/template/src/jquery.fancyboxb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href="<?php echo e(asset('views/template/src/styleb09cb09c.css?v=180')); ?>"
            rel='stylesheet'
            type='text/css'
            media='all'/>
    <link
            href='https://fonts.googleapis.com/css?family=Poppins:400,700,500,600'
            rel='stylesheet'
            type='text/css'>
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
        <div class="so-slideshow">
            <div class="module sohomepage-slider ">
                <div class="modcontent">
                    <div id="sohomepage-slider1">
                        <div class="loader"></div>
                        <div class="so-homeslider sohomeslider-inner-1">
                            <?php if(!empty($thisSlider)): ?>
                                <?php echo $thisSlider; ?>

                            <?php else: ?>
                                <div class="item ">
                                    <a href="#" title="">
                                        <img class="responsive" src="<?php echo e(asset('upload/slider/'.'1170x450.png')); ?>"
                                             alt=""/>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--/.modcontent-->
            </div>
            <!--/.module-->
            <div class="clearfix"></div>
        </div>
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
                                                
                                                <span>0911856720</span>
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
                            <span>Dự án nội bật</span>
                        </h3>
                    </div>
                    <div class="product-slider-2  product-thumb">
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
                        <div class="col-md-9 col-sm-8 col-md-9 col-xs-12">
                            <div class="header-title">
                                <h3 class="modtitle">
                                    <span>Sản phầm nổi bật</span>
                                </h3>
                            </div>
                            <div class="product-slider-2  product-thumb">
                                <?php if(!empty($thisFeatureProduct)): ?>
                                    <?php echo $thisFeatureProduct; ?>

                                <?php else: ?>
                                    <p>Chưa có dự án nổi bật</p>
                                <?php endif; ?>
                            </div>
                            <!-- San pham noi bat -->
                            <div class="header-title">
                                <h3 class="modtitle">
                                    <span>Dự án thiết kế</span>
                                </h3>
                            </div>
                            <div class="product-slider-2  product-thumb">
                                <?php if(!empty($thisFeatureThietke)): ?>
                                    <?php echo $thisFeatureThietke; ?>

                                <?php else: ?>
                                    <p>Chưa có dự án nổi bật</p>
                                <?php endif; ?>
                            </div>
                            <!-- Du an thiet ke -->
                            <div class="header-title">
                                <h3 class="modtitle">
                                    <span>Dự án thi công nội thất</span>
                                </h3>
                            </div>
                            <div class="product-slider-2  product-thumb">
                                <?php if(!empty($thisFeatureNoithat)): ?>
                                    <?php echo $thisFeatureNoithat; ?>

                                <?php else: ?>
                                    <p>Chưa có dự án nổi bật</p>
                                <?php endif; ?>
                            </div>
                            <!-- Du an thi cong noi that -->
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 hidden-xs">
                            <!--tin tuc phong thuy -->
                            <div class="news-pt">
                                <ul class="news-pt-content clearfix">
                                    <li data-value="tin-tuc" class="news-pt-content-item active">Tin tức</li>
                                    <li data-value="phong-thuy" class="news-pt-content-item">Phong thủy</li>
                                </ul>
                                <div class="news active" data-value="tin-tuc">
                                    <ul class="news-content clearfix">
                                        <?php if(!empty($thisNews)): ?>
                                            <?php echo $thisNews; ?>

                                        <?php else: ?>
                                            <li class="news-content-item clearfix">
                                                <p>Chưa có tin tức</p>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <!-- Tin tức -->
                                <div class="news" data-value="phong-thuy">
                                    <ul class="news-content">
                                        <?php if(!empty($thisFengshui)): ?>
                                            <?php echo $thisFengshui; ?>

                                        <?php else: ?>
                                            <li class="news-content-item clearfix">
                                                <p>Chưa có tin phong thủy</p>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <!-- Phong thủy -->
                            </div>
                            <div class="collection" style="display: none;">
                                <div class="collection__title">
                                    <h3><span>Bộ sưu tập</span></h3>
                                </div>
                                <div class="collection__content">
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a
                                                href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                    <div class="collection__item">
                                        <a href="#">
                                            <p>Tên bộ sưu tập</p>
                                            <p>Tên bộ sưu tập</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="shareFacebook">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnhaxinh360.vn%2F&tabs=timeline&width=270&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=332914573468035"
                                        width="270" height="500" style="border:none;overflow:hidden" scrolling="no"
                                        frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="box-collection1">
            <div class="container">
                <div class=" modcontent">
                    <div class="header-title">
                        <h3 class="modtitle">
                                    <span>Danh mục
                                    </span>&nbsp;<span>chung cư</span>
                        </h3>
                    </div>
                    <div class="product-slider-1  product-thumb">
                        <?php if(!empty($thisChungcu)): ?>
                            <?php echo $thisChungcu; ?>

                        <?php else: ?>
                            <p>Chưa có nội dung</p>
                        <?php endif; ?>
                    </div>
                    <!-- Danh mục chung cư -->
                    <div class="header-title">
                        <h3 class="modtitle">
                                    <span>Danh mục
                                    </span>&nbsp;<span>nhà phố</span>
                        </h3>
                    </div>
                    <div class="product-slider-1a  product-thumb">
                        <?php if(!empty($thisNhapho)): ?>
                            <?php echo $thisNhapho; ?>

                        <?php else: ?>
                            <p>Chưa có nội dung</p>
                        <?php endif; ?>
                    </div>
                    <!-- Danh mục nhà phố -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 hidden-xs">
                            <div class="pre-text banner hidden-xs banner-slider">
                                <a
                                        href="javascript:void(0)"
                                        title=" ">
                                    <img src="<?php echo e(asset('upload/images/4.jpg')); ?>">
                                </a>
                                <a
                                        href="javascript:void(0)"
                                        title=" ">
                                    <img src="<?php echo e(asset('upload/images/5.jpg')); ?>">
                                </a>
                                <a
                                        href="javascript:void(0)"
                                        title=" ">
                                    <img src="<?php echo e(asset('upload/images/6.jpg')); ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Danh mục khác bao gồm dự án chung cư và dự án nhà phố -->
        <div class="so-spotlight3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="newsletter">
                            <h2>Đăng ký nhận
                                <span>tư vấn miễn phí</span>
                            </h2>
                            <p
                                    class="page-heading-sub"
                                    data-scroll-reveal="enter bottom and move 40px over 0.6s">
                                Bạn là khách hàng , lớn hay nhỏ, và muốn chúng tôi phục vụ , xin vui lòng gửi
                                cho chúng tôi một
                                <br>
                                email để <?php echo e($system->email); ?>

                            </p>
                            <div class="block_content">
                            <?php echo $__env->make('flexshop.partial.emailIndex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Đăng kí nhận mail -->
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
                            <span>Tin</span>&nbsp;<span>Mới</span>
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
        <?php echo $__env->make('flexshop.partial.footerMap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>