<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php echo $__env->yieldContent('styleMeta'); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/font-icons.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>" type="text/css"/>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar -->
    <?php echo $__env->make('newnews.partial.top-bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- #top-bar end -->

    <!-- Header -->
    <?php echo $__env->make('newnews.partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- #header end -->

    <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- #content end -->
    <!-- Footer -->
    <?php echo $__env->make('newnews.partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins.js')); ?>"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo e(asset('js/functions.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>
</html>