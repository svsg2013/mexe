<div class="block_content">
    <div class="writeinfo"></div>
    <?php echo Form::open(['route'=>'resMail.store','class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data', 'id'=>'formContact']); ?>

    <?php echo Form::email('txtEmail',null,['class'=>'form-control input-lg','placeholder'=>'Nhập E-mail tại đây...']); ?>

    <?php echo Form::button('Đăng ký',['class'=>'btn btn-default btn-lg','type'=>'submit']); ?>

    <?php echo Form::close(); ?>

</div>
<script>
    $(document).ready(function(){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $('#formContact').submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '<?php echo e(route('resMail.store')); ?>',
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