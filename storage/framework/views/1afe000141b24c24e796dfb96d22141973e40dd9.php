<?php echo Form::open(['route'=>'comment.store','class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data','id'=>'formContact']); ?>

<div class="col-md-12">
    <?php echo $__env->make('admin.partial.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="col-md-12">
    <div class="writeinfo"></div>
    <div class="form-group">
        <?php echo Form::label('title','Họ và Tên *',['class'=>'col-md-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::text('txtName',old('txtName'),['placeholder'=>'Nhập tên vào đây...','class'=>'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('title','Số điện thoại',['class'=>'col-md-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::text('txtPhone',old('txtPhone'),['placeholder'=>'09.118.567.20','class'=>'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('title','E-mail',['class'=>'col-md-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::email('txtEmail',old('txtEmail'),['placeholder'=>'sale.nhaxinh360@gmail.com','class'=>'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('Summary','Nội dung *',['class'=>'col-md-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::textarea('txtContent',old('txtContent'),['placeholder'=>'Những thắc mắc bài viết tại đây...','class'=>'form-control','rows'=>5]); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label(' ',' ',['class'=>'col-md-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::button('Gửi nội dung',['class'=>'btn btn-custom waves-effect waves-light btn-md butPost','type'=>'submit','style'=>'background-color:#3ab54a;color:#fff;width:150;']); ?>

        </div>
    </div>
</div><!--mid 8-->
<?php echo Form::close(); ?>


<script>
    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#formContact').submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '<?php echo e(route('comment.store')); ?>',
                type: 'POST',
                data: formData,
                dataType: 'JSON',
                success: function (data) {
                    alert(data.msg);
                }
            });
        });
    });
</script>