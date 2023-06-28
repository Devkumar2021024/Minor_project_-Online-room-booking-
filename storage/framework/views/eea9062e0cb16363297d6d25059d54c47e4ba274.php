

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($global_page_data->blog_heading); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="blog-item">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $post_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

        <div class="row">
            <div class="col-md-12">
                <?php echo e($post_all->links()); ?>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\online_hotel_booking\resources\views/front/blog.blade.php ENDPATH**/ ?>