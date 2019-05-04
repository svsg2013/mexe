<?php $__env->startSection('meta'); ?>
    <base href="http://phuc.viettechcorp.vn/webmau/flexshop/"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('upload/logo.png')); ?>" />
    <title>Flexshop Cua Toi</title>
    <script type="text/javascript" src="<?php echo e(asset('admin/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/font-awesome/css/font-awesome.min.css')); ?>" />
    <script type="text/javascript" src="<?php echo e(asset('views/template/src/bootstrap.minb09c.js')); ?>"></script>
    <link href='<?php echo e(asset('views/template/src/bootstrap.minb09cb09c.css?v=180')); ?>' rel='stylesheet' type='text/css'  media='all'  />
    <script defer type="text/javascript" src="<?php echo e(asset('admin/plugins/nprogress/nprogress.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/nprogress/nprogress.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/bootstrap-dropdown/css/animate.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/plugins/bootstrap-dropdown/css/bootstrap-dropdownhover.min.css')); ?>"/>
    <script defer type="text/javascript" src="<?php echo e(asset('admin/plugins/bootstrap-dropdown/js/bootstrap-dropdownhover.min.js')); ?>"></script>
    <script defer type="text/javascript" src="<?php echo e(asset('admin/plugins/wow/wow.min.js')); ?>"></script>
    <script defer type="text/javascript" src="<?php echo e(asset('admin/assets/js/custom.js')); ?>"></script>
    <link href="<?php echo e(asset('views/template/src/filecssb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href="<?php echo e(asset('views/template/src/owl.carouselb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href="<?php echo e(asset('views/template/src/dq.scssb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href="<?php echo e(asset('views/template/src/font-awesomeb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href="<?php echo e(asset('views/template/src/jquery.fancyboxb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href="<?php echo e(asset('views/template/src/styleb09cb09c.css?v=180')); ?>" rel='stylesheet' type='text/css'  media='all'  />
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,500,600' rel='stylesheet' type='text/css'>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-container">
        <?php echo $__env->make('flexshop.partial.infoTopPage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('flexshop.partial.menuSearch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <script>
            $(document).ready(function(){
                $(window).scroll(function(){
                    if($(this).scrollTop() > 150){
                        $('.header').addClass('fixmenu');
                    } else{
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
        
        <?php echo $__env->make('flexshop.partial.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- this slider -->
        <?php echo $__env->make('flexshop.partial.spotLight', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?><!-- this spotlight -->
            <!--Banner-->
            <?php echo $__env->make('flexshop.partial.listProducts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('flexshop.partial.menuProducts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('flexshop.partial.inboxMail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <style>
                .so-spotlight3 {
                    background: url(<?php echo e(asset('views/template/src/newsletter-bgb09cb09c.jpg?v=180')); ?>) no-repeat center center;
                }
            </style>
            <?php echo $__env->make('flexshop.partial.customerReviews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('flexshop.partial.newNews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('flexshop.partial.partner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <style>
                .contact-info .shop-name .icon {
                    float: left;
                    height: 45px;
                    width: 35px;
                    background: url(<?php echo e(asset('views/template/src/icon_shopb09cb09c.png?v=180')); ?>) no-repeat 0px 0px/35px;
                    margin-right: 9px;
                    margin-top: 5px;
                }
            </style>
            <script type="text/javascript">
                $(window).load(function() {
                    function a() {
                        $.each($(o).find(".owl2-item"), function(a) {
                            var e = $(".owl2-controls .owl2-dots span");
                            $(e[a++]).append("0" + a++)
                        }), $(".owl2-item.center").find(".block-des").addClass("blockdes-active"), $(".owl2-item.center").find(".save").addClass("save-active")
                    }

                    function e() {
                        $(".owl2-item.center").find(".block-des").addClass("blockdes-active"), $(".owl2-item.center").find(".save").addClass("save-active")
                    }
                    $(".loader").fadeOut("slow");
                    var o = $(".sohomeslider-inner-1"),
                        o = $(".product-slider-1"),
                        t = 3;
                    $(".sohomeslider-inner-1").owlCarousel2({
                        animateOut: "slideOutDown",
                        animateIn: "slideInDown",
                        autoplay: !0,
                        autoplayTimeout: 5e3,
                        autoplaySpeed: 1e3,
                        smartSpeed: 500,
                        margin: 10,
                        autoplayHoverPause: !0,
                        startPosition: 0,
                        mouseDrag: !0,
                        touchDrag: !0,
                        dots: !0,
                        autoWidth: !0,
                        dotClass: "owl2-dot",
                        dotsClass: "owl2-dots",
                        loop: !0,
                        navText: ["Next", "Prev"],
                        navClass: ["owl2-prev", "owl2-next"],
                        responsive: {
                            0: {
                                items: 1,
                                autoWidth: !1,
                                nav: 0 >= t ? !1 : !0
                            },
                            480: {
                                items: 1,
                                autoWidth: !1,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 1,
                                autoWidth: !1,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 1,
                                autoWidth: !1,
                                nav: 2 >= t ? !1 : !0
                            },
                            1200: {
                                items: 3,
                                center: !0,
                                nav: 2 >= t ? !1 : !0
                            }
                        },
                        onInitialized: a,
                        onTranslated: e
                    }), $(".product-slider-1").owlCarousel2({
                        margin: 10,
                        loop: !1,
                        slideBy: 4,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 3,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 4,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), $(".product-slider-2").owlCarousel2({
                        margin: 30,
                        loop: !1,
                        slideBy: 4,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 3,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 4,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), $(".product-slider-3").owlCarousel2({
                        margin: 10,
                        loop: !1,
                        slideBy: 4,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 3,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 4,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), $(".product-slider-4").owlCarousel2({
                        margin: 10,
                        loop: !1,
                        slideBy: 1,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 1,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 1,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 1,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 1,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), $(".doitac_ct").owlCarousel2({
                        loop: !1,
                        slideBy: 4,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 3,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 6,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), $(".product-slider-5").owlCarousel2({
                        margin: 10,
                        loop: !1,
                        slideBy: 4,
                        autoplay: 0,
                        autoplayHoverPause: 1,
                        autoplayTimeout: 0,
                        autoplaySpeed: 1e3,
                        startPosition: 0,
                        mouseDrag: 1,
                        touchDrag: 1,
                        navigation: 0,
                        autoWidth: !1,
                        responsive: {
                            0: {
                                items: 1,
                                nav: 1 >= t ? !1 : !0
                            },
                            480: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            768: {
                                items: 2,
                                nav: 2 >= t ? !1 : !0
                            },
                            992: {
                                items: 3,
                                nav: 3 >= t ? !1 : !0
                            },
                            1200: {
                                items: 4,
                                nav: 4 >= t ? !1 : !0
                            }
                        },
                        nav: !0,
                        loop: !0,
                        navSpeed: 500,
                        navText: ["", ""],
                        navClass: ["owl2-prev", "owl2-next"]
                    }), jQuery(document).ready(function(a) {})
                });
            </script> </div>
        <?php echo $__env->make('flexshop.partial.googleMap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('flexshop.partial.footerMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('flexshop.partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div><!-- This page container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('flexshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>