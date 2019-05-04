
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
                    <?php echo Form::open(['route' => ['tuyendung.update',$dataPage->id],'class'=>'form-horizontal','method'=>'put','role'=>'form','enctype'=>'multipart/form-data']); ?>

                    <div class="col-md-12">
                        <div class="p-20">
                            <div class="form-group">
                                <?php echo Form::label('title','Tên Page',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtName',old('txtName',isset($dataPage->title)?$dataPage->title:null),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Content','Nội dung',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtContent',old('txtName',isset($dataPage->content)?$dataPage->content:null),['class'=>'form-control','id'=>'editor1']); ?>

                                    <script>
                                        ckeditor('txtContent');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Thumbnail','Background',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::file('fileImg',['class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Image','Image',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <img src="<?php echo e(asset('upload/thumbnail/baogiatuyendung/'.$dataPage->background)); ?>" class="img-rounded" width="300">
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Ẩn hiện','Ẩn / Hiện Slider',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::checkbox('checkActive',1,($dataPage->active)==1?true:null,['style'=>'visibility:visible']); ?>

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