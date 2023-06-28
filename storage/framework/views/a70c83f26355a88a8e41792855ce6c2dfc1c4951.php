

<?php $__env->startSection('main_content'); ?>
<div class="slider">
    <div class="slide-carousel owl-carousel">
        <?php $__currentLoopData = $slide_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item" style="background-image:url(<?php echo e(asset('uploads/'.$item->photo)); ?>);">
            <div class="bg"></div>
            <div class="text">
                <h2><?php echo e($item->heading); ?></h2>
                <p>
                    <?php echo $item->text; ?>

                </p>
                <?php if($item->button_text != ''): ?>
                <div class="button">
                    <a href="<?php echo e($item->button_url); ?>"><?php echo e($item->button_text); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

 
<div class="search-section">
    <div class="container">
        <form action="<?php echo e(route('cart_submit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="room_id" class="form-select">
                                <option value="">Select Room</option>
                                <?php $__currentLoopData = $room_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="adult" class="form-control" min="1" max="30" placeholder="Adults">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <input type="number" name="children" class="form-control" min="0" max="30" placeholder="Children">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



<?php if($global_setting_data->home_feature_status == 'Show'): ?>
<div class="home-feature">
    <div class="container">
        <div class="row">
            
            <?php $__currentLoopData = $feature_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="<?php echo e($item->icon); ?>"></i></div>
                    <div class="text">
                        <h2><?php echo e($item->heading); ?></h2>
                        <p>
                            <?php echo $item->text; ?>

                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php endif; ?>



<?php if($global_setting_data->home_room_status == 'Show'): ?>
<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Rooms and Suites</h2>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $room_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->iteration>$global_setting_data->home_room_total): ?> 
            <?php break; ?>
            <?php endif; ?>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="<?php echo e(asset('uploads/'.$item->featured_photo)); ?>" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="<?php echo e(route('room_detail',$item->id)); ?>"><?php echo e($item->name); ?></a></h2>
                        <div class="price">
                            $<?php echo e($item->price); ?>/night
                        </div>
                        <div class="button">
                            <a href="<?php echo e(route('room_detail',$item->id)); ?>" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="big-button">
                    <a href="<?php echo e(route('room')); ?>" class="btn btn-primary">See All Rooms</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if($global_setting_data->home_testimonial_status == 'Show'): ?>
<div class="testimonial" style="background-image: url(uploads/slide2.jpg)">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Our Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    <?php $__currentLoopData = $testimonial_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="photo">
                            <img src="<?php echo e(asset('uploads/'.$item->photo)); ?>" alt="">
                        </div>
                        <div class="text">
                            <h4><?php echo e($item->name); ?></h4>
                            <p><?php echo e($item->designation); ?></p>
                        </div>
                        <div class="description">
                            <p>
                                <?php echo $item->comment; ?>

                            </p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php if($global_setting_data->home_latest_post_status == 'Show'): ?>
<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Latest Posts</h2>
            </div>
        </div>
        <div class="row">

            <?php $__currentLoopData = $post_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->iteration>$global_setting_data->home_latest_post_total): ?> 
            <?php break; ?>
            <?php endif; ?>
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="<?php echo e(asset('uploads/'.$item->photo)); ?>" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="<?php echo e(route('post',$item->id)); ?>"><?php echo e($item->heading); ?></a></h2>
                        <div class="short-des">
                            <p>
                                <?php echo $item->short_content; ?>

                            </p>
                        </div>
                        <div class="button">
                            <a href="<?php echo e(route('post',$item->id)); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>
<?php endif; ?>



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
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_hotel_booking\resources\views/front/home.blade.php ENDPATH**/ ?>