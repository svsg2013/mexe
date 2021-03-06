
<?php $__env->startSection('meta'); ?>
    <base href="<?php echo e(url('/')); ?>"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name=viewport content="user-scalable=no,width=device-width,maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('upload/logo.png')); ?>"/>
    <title>Nhà xinh 360 | <?php echo e($data->title); ?></title>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">
        <?php echo $__env->make('flexshop.partial.bannerTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section style="background:#fff">
            <div class="container">
                <?php if(!empty($thisBreadcrumb)): ?>
                    <?php echo $thisBreadcrumb; ?>

                <?php else: ?>
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo e(route('homePage')); ?>" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                            <li>Sản phẩm</li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <div class="page_collection">
            <div class="container">
                <div class="product-info" itemscope itemtype="http://schema.org/Product">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="image large-image">
                                <img src="<?php echo e(asset('upload/thumbnail/'.$data->images)); ?>" alt="<?php echo e($data->title); ?>"
                                     title="<?php echo e($data->title); ?>"/></a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <h1 itemprop="name" class="name_product"><?php echo e($data->title); ?></h1>
                            <div id="bizweb-product-reviews" class="bizweb-product-reviews">
                            </div>
                            <div class="box-price-titrang">
                                <div class="row">
                                    <div class="giasp col-xs-8 col-sm-6">
                                        <strong class="sale-price" itemprop="price"><a href="<?php echo e(route('contactShow')); ?>">Liên hệ</a></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="motanganproduct">
                                <div class="tieude_motanganproduct">MÔ tả:</div>
                                <div class="than_motanganproduct">
                                    <?php echo e($data->summary); ?>

                                </div>
                            </div>
                            <div class="detailcall">
                                <div class="callphoneicon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <a href="tel:0934154886">
                                    đặt mua qua điện thoại (8h00 - 20h00) <br>
                                    <span>0911 856 720</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="line"></div>
                            <div class="share">
                                <div class="fb-like" data-href="flexshop.myharavan.com" data-layout="button_count"
                                     data-action="like" data-size="small" data-show-faces="true"
                                     data-share="true"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9" style="padding-left:0;">
                    <div class="">
                        <div class="tabthongtinchitiet">
                            <div class="tabs">
                                <ul class="nav nav-tabs tabs-title" id="myTab">
                                    <li class="active"><a href="#248">Thông tin sản phấm</a></li>
                                </ul>
                                <div class="tab-content tab-body">
                                    <div class="tab-pane active">
                                        <?php echo $data->content; ?>

                                    </div>
                                    <div class="clearfix">
                                        <?php echo $__env->make('flexshop.partial.comment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="padding-right:0;">
                    <div class="" id="related_products">
                        <?php echo $__env->make('flexshop.partial.product.relateProduct', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function () {
                $('#myTab a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                })
            });
        </script>
        <style>
            .contact-info .shop-name .icon {
                float: left;
                height: 45px;
                width: 35px;
                background: url(<?php echo e(asset('/views/template/hstatic.net/581/1000123581/1000171890/icon_shopb09cb09c.png?v=180')); ?>) no-repeat 0px 0px/35px;
                margin-right: 9px;
                margin-top: 5px;
            }
        </style>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>