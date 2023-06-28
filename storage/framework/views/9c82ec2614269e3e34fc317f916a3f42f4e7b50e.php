

<?php $__env->startSection('heading', 'Send Email to Subscribers'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('admin_subscriber_send_email_submit')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" value="<?php echo e(old('subject')); ?>">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control h_100" cols="30" rows="10"><?php echo e(old('message')); ?></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/subscriber_send_email.blade.php ENDPATH**/ ?>