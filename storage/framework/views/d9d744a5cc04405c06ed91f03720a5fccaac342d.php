

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($single_room_data->name); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content room-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-12 left">

                <div class="room-detail-carousel owl-carousel">
                    <div class="item" style="background-image:url(<?php echo e(asset('uploads/'.$single_room_data->featured_photo)); ?>);">
                        <div class="bg"></div>
                    </div>
                    
                    <?php $__currentLoopData = $single_room_data->rRoomPhoto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item" style="background-image:url(<?php echo e(asset('uploads/'.$item->photo)); ?>);">
                        <div class="bg"></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                
                <div class="description">
                    <?php echo $single_room_data->description; ?>

                </div>

                <div class="amenity">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Amenities</h2>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $arr = explode(',',$single_room_data->amenities);
                        for($j=0;$j<count($arr);$j++) {
                            $temp_row = \App\Models\Amenity::where('id',$arr[$j])->first();
                            echo '<div class="col-lg-6 col-md-12">';
                            echo '<div class="item"><i class="fa fa-check-circle"></i> '.$temp_row->name.'</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>


                <div class="feature">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Features</h2>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>Room Size</th>
                                <td><?php echo e($single_room_data->size); ?></td>
                            </tr>
                            <tr>
                                <th>Number of Beds</th>
                                <td><?php echo e($single_room_data->total_beds); ?></td>
                            </tr>
                            <tr>
                                <th>Number of Bathrooms</th>
                                <td><?php echo e($single_room_data->total_bathrooms); ?></td>
                            </tr>
                            <tr>
                                <th>Number of Balconies</th>
                                <td><?php echo e($single_room_data->total_balconies); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <?php if($single_room_data->video_id != ''): ?>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo e($single_room_data->video_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php endif; ?>


            </div>
            <div class="col-lg-4 col-md-5 col-sm-12 right">

                <div class="sidebar-container" id="sticky_sidebar">

                    <div class="widget">
                        <h2>Room Price per Night</h2>
                        <div class="price">
                            $<?php echo e($single_room_data->price); ?>

                        </div>
                    </div>
                    <div class="widget">
                        <h2>Reserve This Room</h2>
                        <form action="<?php echo e(route('cart_submit')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="room_id" value="<?php echo e($single_room_data->id); ?>">
                            <div class="form-group mb_20">
                                <label for="">Check in & Check out</label>
                                <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                            </div>
                            <div class="form-group mb_20">
                                <label for="">Adult</label>
                                <input type="number" name="adult" class="form-control" min="1" max="5" placeholder="Adults">
                            </div>
                            <div class="form-group mb_20">
                                <label for="">Children</label>
                                <input type="number" name="children" class="form-control" min="0" max="5" placeholder="Children">
                            </div>
                            <button type="submit" class="book-now">Add to Cart</button>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '<?php echo e($error); ?>',
            });
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/front/room_detail.blade.php ENDPATH**/ ?>