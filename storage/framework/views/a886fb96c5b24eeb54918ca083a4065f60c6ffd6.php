
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('admin.partial.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Hot</th>
                        <th>Feature</th>
                        <th>Active</th>
                        <th>Weight</th>
                        <th>Option</th>
                    </tr>
                    </thead>


                    <tbody>
                    <?php $__currentLoopData = $getData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $get): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($get->title); ?></td>
                        <td>
                            <?php if(($get->hot) == 1): ?>
                                <?php echo "<p style='color:#2b579a'>On<p>"; ?>
                                <?php else: ?>
                                    <?php echo "<p style='color:#d8d8d8'>Off<p>"; ?>
                                <?php endif; ?>
                        </td>
                        <td>
                            <?php if(($get->feature) == 1): ?>
                                <?php echo "<p style='color:#2b579a'>On<p>"; ?>
                            <?php else: ?>
                                <?php echo "<p style='color:#d8d8d8'>Off<p>"; ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if(($get->active) == 1): ?>
                                <?php echo "<p style='color:#2b579a'>On<p>"; ?>
                            <?php else: ?>
                                <?php echo "<p style='color:#d8d8d8'>Off<p>"; ?>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($get->sort); ?></td>
                        <td>
                            <a href="<?php echo e(route('furniture.edit',$get->id)); ?>"><button type="button" class="btn btn-icon waves-effect waves-light btn-warning">  <i class="fa fa-wrench"></i> </button></a>
                            <a href="<?php echo e(route('furs.delete',$get->id)); ?>"><button type="button" class="btn btn-icon waves-effect waves-light btn-danger"> <i class="fa fa-remove"></i> </button></a>
                        </td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jstable'); ?>

    <!--js table-->
    <script src="<?php echo e(asset('backend/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/responsive.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.colVis.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables/dataTables.fixedColumns.min.js')); ?>"></script>

    <!-- init -->
    <script src="<?php echo e(asset('backend/pages/jquery.datatables.init.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({keys: true});
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "<?php echo e(asset('public/backend/plugins/datatables/json/scroller-demo.json')); ?>",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>