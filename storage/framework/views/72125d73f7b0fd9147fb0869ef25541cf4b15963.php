

<?php $__env->startSection('heading', 'Edit Post'); ?>

<?php $__env->startSection('right_top_button'); ?>
<a href="<?php echo e(route('admin_post_view')); ?>" class="btn btn-primary"><i class="fa fa-eye"></i> View All</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_post_update',$post_data->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label>
                                    <div>
                                        <img src="<?php echo e(asset('uploads/'.$post_data->photo)); ?>" alt="" class="w_200">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Photo</label>
                                    <div>
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="heading" value="<?php echo e($post_data->heading); ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Short Content *</label>
                                    <textarea name="short_content" class="form-control h_100" cols="30" rows="10"><?php echo e($post_data->short_content); ?></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content *</label>
                                    <textarea name="content" class="form-control snote" cols="30" rows="10"><?php echo e($post_data->content); ?></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/post_edit.blade.php ENDPATH**/ ?>