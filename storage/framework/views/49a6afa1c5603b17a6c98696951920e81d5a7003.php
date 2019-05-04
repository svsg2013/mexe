<?php $__env->startSection('styleMeta'); ?>
    <title>Mexe.info</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-8 bottommargin">
                        <?php echo $__env->make('newnews.partial.SlideNews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <div class="clear"></div>
                        <!-- post news and advertisement -->
                        <?php echo $__env->make('newnews.partial.postAd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- end post and advertisement -->
                        <!-- gallery -->
                        <?php echo $__env->make('newnews.partial.gallery', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- end gallery -->
                        <?php echo $__env->make('newnews.partial.otherNews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div>
                    <div class="col-lg-4">
                        <div class="line d-block d-lg-none d-xl-block"></div>
                        <?php echo $__env->make('newnews.partial.widget', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>

                </div>

            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template-news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>