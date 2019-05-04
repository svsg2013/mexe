<?php $__env->startSection('meta'); ?>
    <title><?php echo e($system->title); ?> | Liên hệ</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contentAjax">
        <?php echo $__env->make('flexshop.partial.bannerTop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section class="introdutionPage" style="background-image:url('<?php echo e(asset('upload/'.$system->bgContact)); ?>')">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(route('homePage')); ?>" data-name="trang-chu" data-title="Trang chủ"  ><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li>Liên hệ</li>
                    </ul></div></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page_title">Liên hệ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?php echo e(route('putContact')); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="contact_form">
                                <fieldset class="form-group">
                                    <label>Tên<span class="required">*</span></label>
                                    <input type="text" name="txtName"  placeholder="Tên của bạn" class="form-control">
                                    <label>Email<span class="required">*</span></label>
                                    <input type="email" name="txtEmail" placeholder="Email của bạn" class="form-control">
                                </fieldset>
                                <div class="form-group">
                                    <label>Nội dung<span class="required">*</span></label>
                                    <textarea rows="3" name="txtContent" class="form-control"></textarea>
                                </div>
                                <p class="form-group">
                                    <button class="btn btn_button" type="submit">Gửi liên hệ</button>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="location" style="font-size:17px; color:#fff">
                            <address>
                                <strong></strong><br>
                                <?php echo e($system->address); ?><br>
                                <abbr title="Phone">Điện thoại:</abbr> <?php echo e($system->phone); ?><br>
                                Email: <a href="mailto:<?php echo e($system->email); ?>"><?php echo e($system->email); ?></a>
                            </address>
                            <p>Nếu có thắc mắc hoặc cần trợ giúp, bạn có thể liên hệ với chúng tôi bất cứ lúc nào!</p>
                        </div>
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