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
                    <div class="col-md-12">
                        <div class="p-20">
                            <?php echo Form::open(['route' => 'cateprod.store','class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']); ?>
                            <div class="form-group">
                                <?php echo Form::label('title','Title',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <?php echo Form::text('txtName',old('txtName'),['placeholder'=>'To type here','class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('input select','Input Select',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <select class="form-control" name="slMenu">
                                        <option value="0">Select one</option>
                                        <?php echo e(getMenu($cateProds)); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Title','Meta Title',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <?php echo Form::text('txtMeta',old('txtMeta'),['placeholder'=>'To type here if any','class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Description','Meta Description',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtDescription',old('txtDescription'),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Thumbnail','Hình Banner',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <?php echo Form::file('fileBanner',['class'=>'form-control']); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label(' ',' ',['class'=>'col-md-2 control-label']); ?>
                                <div class="col-md-10">
                                    <?php echo Form::button('Click me, Please!',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']); ?>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>
                        </div>
                    </div>

                </div>
                <!-- end row -->

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>