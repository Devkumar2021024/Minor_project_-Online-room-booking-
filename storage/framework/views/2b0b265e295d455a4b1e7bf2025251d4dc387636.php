

<?php $__env->startSection('heading', 'Rooms (Booked and Available) for '.$selected_date); ?>

<?php $__env->startSection('right_top_button'); ?>
<a href="<?php echo e(route('admin_datewise_rooms')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Back to previous</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Room Name</th>
                                    <th>Total Rooms</th>
                                    <th>Booked Rooms</th>
                                    <th>Available Rooms</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rooms = \App\Models\Room::get();
                                ?> 
                                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td><?php echo e($row->total_rooms); ?></td>
                                    <td>
                                        <?php
                                        $cnt = \App\Models\BookedRoom::where('room_id',$row->id)->where('booking_date',$selected_date)->count();
                                        ?>
                                        <?php echo e($cnt); ?>

                                    </td>
                                    <td>
                                        <?php echo e($row->total_rooms-$cnt); ?>

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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/datewise_rooms_detail.blade.php ENDPATH**/ ?>