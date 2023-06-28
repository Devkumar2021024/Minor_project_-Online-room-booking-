

<?php $__env->startSection('heading', 'Edit Contact Page'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_page_contact_update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="contact_heading" value="<?php echo e($page_data->contact_heading); ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Map iframe code</label>
                                    <textarea name="contact_map" class="form-control h_100" cols="30" rows="10"><?php echo e($page_data->contact_map); ?></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="contact_status" class="form-control">
                                        <option value="1" <?php if($page_data->contact_status == 1): ?> selected <?php endif; ?>>Show</option>
                                        <option value="0" <?php if($page_data->contact_status == 0): ?> selected <?php endif; ?>>Hide</option>
                                    </select>
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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/page_contact.blade.php ENDPATH**/ ?>