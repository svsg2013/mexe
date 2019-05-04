<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aha Magazine | Trang chu</title>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="">
<?php echo $__env->yieldContent('meta'); ?>

<!-- Google Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo e(asset('workshop/css/bootstrap.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('workshop/css/font-icons.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('workshop/css/style.css')); ?>"/>
<?php echo $__env->yieldContent('css'); ?>

<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo e(asset('workshop/img/favicon.ico')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('workshop/img/apple-touch-icon.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('workshop/img/apple-touch-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('workshop/img/apple-touch-icon-114x114.png')); ?>">

    <!-- Lazyload -->
    <script src="<?php echo e(asset('workshop/js/lazysizes.min.js')); ?>"></script>

</head>
<?php $__env->startSection('body'); ?>
<body class="bg-light">
<?php echo $__env->yieldSection(); ?>
<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<?php echo $__env->make('workshop.partial.menuSide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Side Menu Button -->
                    <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
                    </button> <!-- end Side menu button -->

                    <!-- Mobile logo -->
                <?php echo $__env->make('workshop.partial.mobileLogo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- Nav-wrap -->
                <?php echo $__env->make('workshop.partial.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right nav--align-right d-lg-flex">

                        <!-- Socials -->
                    <?php echo $__env->make('workshop.partial.social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <!-- Search -->
                        <?php echo $__env->make('workshop.partial.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->

    <!-- Header -->
<?php echo $__env->make('workshop.partial.logoImg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end header -->

    <!-- Trending Now -->
<?php echo $__env->make('workshop.partial.trend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Featured Posts Grid -->
<?php echo $__env->make('workshop.partial.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end featured posts grid -->

    <div class="main-container container mt-40" id="main-container">

        <!-- Content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- end content -->
    </div> <!-- end main container -->

    <!-- Footer -->
<?php echo $__env->make('workshop.partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="<?php echo e(asset('workshop/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/owl-carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/twitterFetcher_min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/jquery.newsTicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(asset('workshop/js/scripts.js')); ?>"></script>
<?php echo $__env->yieldContent('js'); ?>

</body>
</html>