

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($global_page_data->faq_heading); ?></h2>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <?php
                    $i=0;
                    ?>
                    <?php $__currentLoopData = $faq_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $i++;
                    ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?php echo e($i); ?>">
                        <button class="accordion-button <?php if($i!=1): ?> collapsed <?php endif; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($i); ?>" aria-expanded="<?php if($i==1): ?> true <?php else: ?> false <?php endif; ?>" aria-controls="collapse<?php echo e($i); ?>">
                            <?php echo e($item->question); ?>

                        </button>
                        </h2>
                        <div id="collapse<?php echo e($i); ?>" class="accordion-collapse collapse <?php if($i==1): ?> show <?php endif; ?>" aria-labelledby="heading<?php echo e($i); ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php echo $item->answer; ?>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\online_hotel_booking\resources\views/front/faq.blade.php ENDPATH**/ ?>