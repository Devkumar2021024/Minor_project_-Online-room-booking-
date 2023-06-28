

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($global_page_data->room_heading); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="home-rooms">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $room_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

            <div class="col-md-12">
                <?php echo e($room_all->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/front/room.blade.php ENDPATH**/ ?>