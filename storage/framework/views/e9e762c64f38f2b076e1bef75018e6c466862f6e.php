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
                    <?php echo Form::open(['route' => 'news.store','class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']); ?>

                    <div class="col-md-8">
                        <div class="p-20">
                            <div class="form-group">
                                <?php echo Form::label('title','Tiêu Đề *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtName',old('txtName'),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('title','Tiêu đề cho SEO',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtMetatitle',old('txtMetitle'),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('input select','Chọn danh mục',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <select class="form-control" name="slMenu">
                                        <option value="">Select one</option>
                                        <?php echo e(getMenu($getDataMenu)); ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Summary','Mô tả *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtSummary',old('txtSummary'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Summary','Tóm tắt cho SEO',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtDescription',old('txtDescription'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Content','Nội dung *',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtContent',old('txtContent'),['class'=>'form-control','id'=>'editor1']); ?>

                                    <script>
                                        ckeditor('txtContent');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Thumbnail','Hình đại diện (368 x 246)',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::file('fileImg',['class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label(' ',' ',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::button('Gửi',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']); ?>

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
                                    <input type="checkbox" value="1" id="slideThree" name="checkHot" />
                                    <label for="slideThree"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <?php echo Form::label('Feature News'); ?>

                            <!-- Slide THREE -->
                                <div class="slideThree1">
                                    <input type="checkbox" value="1" id="slideThree1" name="checkFeature" />
                                    <label for="slideThree1"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <?php echo Form::label('Active'); ?>

                            <!-- Slide THREE -->
                                <div class="slideThree2">
                                    <input type="checkbox"  checked value="1" id="slideThree2" name="checkActive" />
                                    <label for="slideThree2"></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="cusWeight">
                                    <?php echo Form::label('The Weight post'); ?>

                                    <?php echo Form::text('txtWeight','1'); ?>

                                </div>
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
    <script src="<?php echo e(asset('backend/plugins/jquery.filer/js/jquery.filer.min.js')); ?>"></script>
    <!-- Bootstrap fileupload js -->
    <script src="<?php echo e(asset('backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js')); ?>"></script>
    <!-- page specific js -->
    <script src="<?php echo e(asset('backend/pages/jquery.fileuploads.init.js')); ?>"></script>
    <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
            var $on = 'section';
            $($on).css({
                'background':'none',
                'border':'none',
                'box-shadow':'none'
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>