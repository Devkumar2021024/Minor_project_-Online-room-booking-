

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($single_post_data->heading); ?></h2>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-lg-8 col-md-12">
                <div class="featured-photo">
                    <img src="<?php echo e(asset('uploads/'.$single_post_data->photo)); ?>" alt="">
                </div>
                <div class="sub">
                    <div class="item">
                        <b><i class="fa fa-clock-o"></i></b>
                        <?php echo e(date('d M, Y', strtotime($single_post_data->updated_at))); ?>

                    </div>
                    <div class="item">
                        <b><i class="fa fa-eye"></i></b>
                        <?php echo e($single_post_data->total_view); ?>

                    </div>
                </div>
                <div class="main-text">
                    <?php echo $single_post_data->content; ?>

                </div>
                <div class="share-content">
                    <h2>Share</h2>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
            </div>



        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\online_hotel_booking\resources\views/front/post.blade.php ENDPATH**/ ?>