

<?php $__env->startSection('heading', 'View Rooms'); ?>

<?php $__env->startSection('right_top_button'); ?>
<a href="<?php echo e(route('admin_room_add')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
<?php $__env->stopSection(); ?>

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
                                    <th>Price (per night)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $i++; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <img src="<?php echo e(asset('uploads/'.$row->featured_photo)); ?>" alt="" class="w_200">
                                    </td>
                                    <td><?php echo e($row->name); ?></td>
                                    <td>$<?php echo e($row->price); ?></td>
                                    <td class="pt_10 pb_10">
                                        
                                        <button class="btn btn-warning" data-toggle="modal" data-target="#exampleModal<?php echo e($i); ?>">Detail</button>

                                        <a href="<?php echo e(route('admin_room_gallery',$row->id)); ?>" class="btn btn-success">Gallery</a>

                                        <a href="<?php echo e(route('admin_room_edit',$row->id)); ?>" class="btn btn-primary">Edit</a>
                                        <a href="<?php echo e(route('admin_room_delete',$row->id)); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                    </td>
                                </tr>

                                <div class="modal fade" id="exampleModal<?php echo e($i); ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Room Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Photo</label></div>
                                                    <div class="col-md-8">
                                                        <img src="<?php echo e(asset('uploads/'.$row->featured_photo)); ?>" alt="" class="w_200">
                                                    </div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Name</label></div>
                                                    <div class="col-md-8"><?php echo e($row->name); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                    <div class="col-md-8"><?php echo $row->description; ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Price (per night)</label></div>
                                                    <div class="col-md-8">$<?php echo e($row->price); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Rooms</label></div>
                                                    <div class="col-md-8"><?php echo e($row->total_rooms); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Amenities</label></div>
                                                    <div class="col-md-8">
                                                        <?php
                                                        $arr = explode(',',$row->amenities);
                                                        for($j=0;$j<count($arr);$j++) {
                                                            $temp_row = \App\Models\Amenity::where('id',$arr[$j])->first();
                                                            echo $temp_row->name.'<br>';
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Size</label></div>
                                                    <div class="col-md-8"><?php echo e($row->size); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Beds</label></div>
                                                    <div class="col-md-8"><?php echo e($row->total_beds); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Bathrooms</label></div>
                                                    <div class="col-md-8"><?php echo e($row->total_bathrooms); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Balconies</label></div>
                                                    <div class="col-md-8"><?php echo e($row->total_balconies); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Total Guests</label></div>
                                                    <div class="col-md-8"><?php echo e($row->total_guests); ?></div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Video</label></div>
                                                    <div class="col-md-8">
                                                        <div class="iframe-container1">
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($row->video_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/room_view.blade.php ENDPATH**/ ?>