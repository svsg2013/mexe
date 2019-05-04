<?php $__env->startSection('meta'); ?>
<?php $__env->startSection('title'); ?><?php echo e($meta->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?><?php echo e($meta->description); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('image'); ?><?php echo e($meta->image); ?><?php $__env->stopSection(); ?>
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