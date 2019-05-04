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
                            <?php echo Form::open(['route' => ['system.update',$dataSystem->id],'class'=>'form-horizontal','method'=>'put','role'=>'form','enctype'=>'multipart/form-data']); ?>

                            <div class="form-group">
                                <?php echo Form::label('title','Địa chỉ',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtAddress',old('txtAdress',isset($dataSystem->address)?$dataSystem->address:null),['placeholder'=>'To type here','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Title','Điện thoại / Hotline',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtPhone',old('txtPhone',isset($dataSystem->phone)?$dataSystem->phone:null),['placeholder'=>'To type here if any','class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Description','Thông tin chân trang',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtFooter',old('txtFooter',isset($dataSystem->info)?$dataSystem->info:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Description','E-mail',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::text('txtEmail',old('txtEmail',isset($dataSystem->email)?$dataSystem->email:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Meta Description','Google Analytics',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::textarea('txtAna',old('txtAna',isset($dataSystem->analytic)?$dataSystem->analytic:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Thumbnail','Logo',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <?php echo Form::file('fileImg',['class'=>'form-control']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('Image','Image',['class'=>'col-md-2 control-label']); ?>

                                <div class="col-md-10">
                                    <img src="<?php echo e(asset('upload/'.$dataSystem->logo)); ?>" class="img-rounded" width="300">
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