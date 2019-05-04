<section class="section tab-post mb-10">
    <div class="title-wrap">
        <h3 class="section-title">Máy Lup-be</h3>

        <div class="tabs tab-post__tabs">
            <ul class="tabs__list">
                <li class="tabs__item tabs__item--active">
                    <a href="#tab-all" class="tabs__trigger">All</a>
                </li>
                <?php $__currentLoopData = $infoNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getCate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="tabs__item">
                        <a href="#<?php echo e($getCate['cateSlug']); ?>" class="tabs__trigger"><?php echo e($getCate['cateName']); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul> <!-- end tabs -->
        </div>
    </div>

    <!-- tab content -->
    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

        <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
            <div class="row">
                    <?php echo $thisNews; ?>

            </div>
        </div> <!-- end pane 1 -->
        <?php $__currentLoopData = $infoNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuckAll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tabs__content-pane" id="<?php echo e($fuckAll['cateSlug']); ?>">
                <div class="row">
                    <?php $__currentLoopData = $fuckAll['CateAndNews']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fuck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <article class="entry">
                                <div class="entry__img-holder">
                                    <a href="<?php echo e(route('postNews',['id' =>$fuck->newsID,'newsSlug' =>$fuck->newsSlug])); ?>">
                                        <div class="thumb-container thumb-75">
                                            <img data-src="<?php echo e(asset('upload/thumbnail/' . $fuck->images)); ?>" src="<?php echo e(asset('upload/thumbnail/' . $fuck->images)); ?>"
                                                 class="entry__img lazyload" alt="<?php echo e($fuck->title); ?>"/>
                                        </div>
                                    </a>
                                </div>

                                <div class="entry__body">
                                    <div class="entry__header">
                                        <a href="<?php echo e(route('catePost',[$fuck->cateID,$fuck->cateSlug])); ?>" class="entry__meta-category"><?php echo e($fuck->name); ?></a>
                                        <h2 class="entry__title">
                                            <a href="<?php echo e(route('postNews',['id' =>$fuck->newsID,'newsSlug' =>$fuck->newsSlug])); ?>"><?php echo e($fuck->title); ?></a>
                                        </h2>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-date">
                                                <i class="ui-date"></i>
                                                <?php echo e(date('d-m-Y', strtotime($fuck->newsDate))); ?>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry__excerpt">
                                        <p><?php echo e(truncateStringWords($fuck->summary, 180)); ?></p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- col-6 -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!-- row -->
            </div> <!-- end pane -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div> <!-- end tab content -->
</section>