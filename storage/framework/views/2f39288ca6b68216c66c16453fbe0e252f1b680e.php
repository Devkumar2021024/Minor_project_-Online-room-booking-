

<?php $__env->startSection('heading', 'Customers'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <?php if($row->photo!=''): ?>
                                            <img src="<?php echo e(asset('uploads/'.$row->photo)); ?>" alt="" class="w_100">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('uploads/default.png')); ?>" alt="" class="w_100">
                                        <?php endif; ?>
                                        
                                    </td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->email); ?></td>
                                    <td><?php echo e($row->phone); ?></td>
                                    <td class="pt_10 pb_10">
                                        <?php if($row->status == 1): ?>
                                            <a href="<?php echo e(route('admin_customer_change_status',$row->id)); ?>" class="btn btn-success">Active</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('admin_customer_change_status',$row->id)); ?>" class="btn btn-danger">Pending</a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/customer.blade.php ENDPATH**/ ?>