<?php $__env->startSection('content'); ?>
  <div class="row">

    <!-- Posts -->
    <div class="col-lg-8 blog__content mb-30">

      <!-- Hot News -->
      <?php echo $__env->make('workshop.partial.hotnews', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- end hot news -->

      <!-- hot prod -->
      <?php echo $__env->make('workshop.partial.hotprod', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <!-- end hot prod -->

      <!-- Ad Banner 728 -->
      <?php echo $__env->make('workshop.partial.adbannermid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Editor's Picks -->
      <?php echo $__env->make('workshop.partial.hightlightpost', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <!-- end editors picks -->

      <!-- Posts from categories -->
      <?php echo $__env->make('workshop.partial.showpost', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- end posts from categories -->

      <!-- Carousel posts -->
      <?php echo $__env->make('workshop.partial.slideprod', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    </div> <!-- end posts -->

    <!-- Sidebar -->
    <?php echo $__env->make('workshop.partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end sidebar -->

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('workshop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>