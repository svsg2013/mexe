<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
        xmlns="http://www.w3.org/1999/xhtml"
        xml:lang="vi"
        lang="vi"
        data-load="trang-chu">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

<head>
<?php echo $__env->yieldContent('meta'); ?>
</head>
<body id="flexshop" class="">
<div class="page-container">
    <?php echo $__env->make('flexshop.partial.menuSearch', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('flexshop.partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="quickview-product dqdt-popup"></div>
<a href="#0" class="cd-top">Top</a>
<script
        src=<?php echo e(asset('views/template/src/jquery.fancyboxb09cb09c.js?v=180')); ?>

        type='text/javascript'></script>
<script
        src=<?php echo e(asset('views/template/src/owl.carouselb09cb09c.js?v=180')); ?>

        type='text/javascript'></script>
<script
        src=<?php echo e(asset('views/template/src/jquery.easing.1.3b09cb09c.js?v=180')); ?>

        type='text/javascript'></script>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7a1c68afc2c34e96e7b6d3/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>

