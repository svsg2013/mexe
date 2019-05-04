
<?php $__env->startSection('meta'); ?>
    <?php if(empty($meta)): ?>
        <?php $__env->startSection('title'); ?><?php echo e('Sản phẩm'); ?><?php $__env->stopSection(); ?>
        <?php $__env->startSection('description'); ?><?php echo e('Sản phẩm giá được nhập khẩu từ Thái Lan chất lượng tốt mà giá phải chăng'); ?><?php $__env->stopSection(); ?>
    <?php else: ?>
            <?php $__env->startSection('title'); ?><?php echo e($meta->title); ?><?php $__env->stopSection(); ?>
            <?php $__env->startSection('description'); ?><?php echo e($meta->description); ?><?php $__env->stopSection(); ?>
            <?php $__env->startSection('image'); ?><?php echo e($meta->image); ?><?php $__env->stopSection(); ?>
            <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">
        <?php echo $__env->make('flexshop.partial.product.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section style="background:#fff">
            <div class="container">
                <?php if(!empty($thisBreadcrumb)): ?>
                    <?php echo $thisBreadcrumb; ?>

                <?php else: ?>
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo e(route('homePage')); ?>" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                            <?php if(!empty($flag)): ?>
                                <li>Tìm kiếm Sản Phẩm</li>
                            <?php else: ?>
                                <li>Sản phẩm</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <div class="page_collection">
            <div class="container">
                <div class="row">
                    <?php echo $__env->make('flexshop.partial.product.navLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="col-xs-12 col-sm-8 col-md-9">
                    
                    <!--Sắp xếp-->
                        
                        <style>
                            a.button.button-grid {
                                background: #3ab54a !important;
                            }
                        </style>
                        <div class="row product-thumb">
                            <?php if(!empty($thisProductList)): ?>
                                <?php echo $thisProductList; ?>

                            <?php else: ?>
                                <p>Chưa có dữ liệu sản phẩm</p>
                            <?php endif; ?>
                            <style>
                                .page-numbers.current {
                                    background: #000;
                                    color: #fff !important;
                                }
                                .pagination {
                                    text-align: center;
                                }
                                .pagination, .wp-prev-next {
                                    margin: 1.5em 0;
                                }
                                .pagination ul {
                                    border: 1px solid #b7b7b7;
                                    display: inline-block;
                                    white-space: nowrap;
                                    padding: 0;
                                    clear: both;
                                }
                                .pagination li:first-child {
                                    border-left: none;
                                }
                                .pagination li {
                                    border-left: 1px solid #b7b7b7;
                                    padding: 0;
                                    margin: 0;
                                    float: left;
                                    display: inline;
                                    overflow: hidden;
                                }
                                a:link, a:visited:link {
                                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);
                                }
                                a:-webkit-any-link {
                                    text-decoration: none !important;
                                }
                                .pagination a, .pagination span {
                                    margin: 0;
                                    text-decoration: none;
                                    padding: 0;
                                    line-height: 1em;
                                    font-size: 1em;
                                    font-weight: normal;
                                    padding: 0.75em;
                                    min-width: 1em;
                                    display: block;
                                }
                            </style>
                        </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>