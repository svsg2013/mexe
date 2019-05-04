<?php $__env->startSection('title'); ?>
    Create news - ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $__env->make('admin.partial.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <div class="row">
                    <?php echo Form::open(['route' => ['fengshui.update',$getPosts->id],'class'=>'form-horizontal','method'=>'put','role'=>'form','enctype'=>'multipart/form-data']); ?>

                    <div class="col-md-8">
                        <div class="p-20">
                            <div class="form-group">
                                <?php echo Form::label('title','Title *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtName',old('txtName',isset($getPosts)?$getPosts->title:null),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('title','SEO Title',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtMetatitle',old('txtName',isset($getPosts)?$getPosts->metaTitle:null),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('input select','Input Select',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <select class="form-control" name="slMenu">
                                        <option value="">Select one</option>
                                        <?php echo e(getMenu($getDataMenu,0,"",$getPosts->Cate_id)); ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Summary','Summary *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtSummary',old('txtName',isset($getPosts->summary)?$getPosts->summary:null),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Summary','SEO Description',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtDescription',old('txtName',isset($getPosts->description)?$getPosts->description:null),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Content','Content *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtContent',old('txtName',isset($getPosts->content)?$getPosts->content:null),['class'=>'form-control','id'=>'editor1']); ?>

                                    <script>
                                        ckeditor('txtContent');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Thumbnail','Thumbnail (500 x 500)',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::file('fileImg',['class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Image','Image',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <img src="<?php echo e(asset('upload/thumbnail/'.$getPosts->images)); ?>" class="img-rounded"
                                         alt="<?php echo e($getPosts->title); ?>" width="300">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label(' ',' ',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::button('Submit',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']); ?>

                                </div>
                            </div>
                        </div><!-----s----------->
                    </div><!--mid 8-->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                            <?php echo Form::label('Hot News'); ?>

                            <!-- Slide THREE -->
                                <div class="slideThree">
                                    <input type="checkbox" <?php echo e($getPosts->hot == 1?'checked':null); ?> value="1"
                                           id="slideThree" name="checkHot"/>
                                    <label for="slideThree"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <?php echo Form::label('Feature News'); ?>

                            <!-- Slide THREE -->
                                <div class="slideThree1">
                                    <input type="checkbox" <?php echo e($getPosts->feature == 1?'checked':null); ?> value="1"
                                           id="slideThree1" name="checkFeature"/>
                                    <label for="slideThree1"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <?php echo Form::label('Active'); ?>

                            <!-- Slide THREE -->
                                <div class="slideThree2">
                                    <input type="checkbox" <?php echo e($getPosts->active == 1?'checked':null); ?> value="1"
                                           id="slideThree2" name="checkActive"/>
                                    <label for="slideThree2"></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="cusWeight">
                                    <?php echo Form::label('Số thứ tự','Số Thứ Tự',['class'=>'col-md-6']); ?>

                                    <?php echo Form::text('txtWeight','1',['class'=>'col-md-6','style'=>'width:50%']); ?>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="form-group cusSelect" style="margin-top: 5px;">
                                    <h5>Chọn tin tức liên quan</h5>
                                    <select multiple class="form-control" name="slPost[]">
                                        <?php $__currentLoopData = $unseris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                    <?php if(!empty($uns['relation'])): ?>
                                                    <?php $__currentLoopData = $uns['relation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $un): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($uns['id'] == $un): ?>
                                                    <?php echo e('selected'); ?>

                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                    value=<?php echo e($uns['id']); ?>><?php echo e($uns['title']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group cusSelect" style="margin-top: 5px;">
                                    <h5>Sản phẩm liên quan tới bài viết</h5>
                                    <select multiple class="form-control" name="slProd[]">
                                        <?php $__currentLoopData = $getProds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(isset($tag)): ?>
                                                <option
                                                <?php $__currentLoopData = $getTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($tag->id == $get->id_product): ?>
                                                        <?php echo e('selected'); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                value="<?php echo e($tag->id); ?>"><?php echo e($tag->title); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                        </div><!--row-sigbar-right-->
                    </div>
                    <?php echo Form::close(); ?>

                </div><!-- end row -->
            </div>
        </div> <!-- end card-box -->
    </div><!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsfiles'); ?>
    <!-- Jquery filer js -->
    <script src="<?php echo e(asset('public/backend/plugins/jquery.filer/js/jquery.filer.min.js')); ?>"></script>
    <!-- Bootstrap fileupload js -->
    <script src="<?php echo e(asset('public/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js')); ?>"></script>
    <!-- page specific js -->
    <script src="<?php echo e(asset('public/backend/pages/jquery.fileuploads.init.js')); ?>"></script>
    <script>
        $(document).ready(function () {
//   Hide the border by commenting out the variable below
            var $on = 'section';
            $($on).css({
                'background': 'none',
                'border': 'none',
                'box-shadow': 'none'
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>