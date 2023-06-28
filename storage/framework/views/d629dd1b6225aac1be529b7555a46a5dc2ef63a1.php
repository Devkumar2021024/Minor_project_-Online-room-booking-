

<?php $__env->startSection('heading', 'Order Invoice'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="section-body">
    <div class="invoice">
        <div class="invoice-print">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-title">
                        <h2>Invoice</h2>
                        <div class="invoice-number">Order #<?php echo e($order->order_no); ?></div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <address>
                                <strong>Invoice To</strong><br>
                                <?php echo e($customer_data->name); ?><br>
                                <?php echo e($customer_data->address); ?>,<br>
                                <?php echo e($customer_data->state); ?>, <?php echo e($customer_data->city); ?>, <?php echo e($customer_data->zip); ?>

                            </address>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <address>
                                <strong>Invoice Date</strong><br>
                                <?php echo e($order->booking_date); ?>

                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">Hotel room information are given below in detail:</p>
                    <hr class="invoice-above-table">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-md">
                            <tr>
                                <th>SL</th>
                                <th>Room Name</th>
                                <th class="text-center">Checkin Date</th>
                                <th class="text-center">Checkout Date</th>
                                <th class="text-center">Number of Adult</th>
                                <th class="text-center">Number of Children</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                            <?php $total = 0; ?>
                            <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            $room_data = \App\Models\Room::where('id',$item->room_id)->first();
                            ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($room_data->name); ?></td>
                                <td class="text-center"><?php echo e($item->checkin_date); ?></td>
                                <td class="text-center"><?php echo e($item->checkout_date); ?></td>
                                <td class="text-center"><?php echo e($item->adult); ?></td>
                                <td class="text-center"><?php echo e($item->children); ?></td>
                                <td class="text-right">
                                    <?php
                                    $d1 = explode('/',$item->checkin_date);
                                    $d2 = explode('/',$item->checkout_date);
                                    $d1_new = $d1[2].'-'.$d1[1].'-'.$d1[0];
                                    $d2_new = $d2[2].'-'.$d2[1].'-'.$d2[0];
                                    $t1 = strtotime($d1_new);
                                    $t2 = strtotime($d2_new);
                                    $diff = ($t2-$t1)/60/60/24;
                                    $sub = $room_data->price*$diff;
                                    ?>
                                    $<?php echo e($sub); ?>

                                </td>
                            </tr>
                            <?php
                            $total += $sub;
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12 text-right">
                            <div class="invoice-detail-item">
                                <div class="invoice-detail-name">Total</div>
                                <div class="invoice-detail-value invoice-detail-value-lg">$<?php echo e($total); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="about-print-button">
        <div class="text-md-right">
            <a href="javascript:window.print();" class="btn btn-warning btn-icon icon-left text-white print-invoice-button"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/admin/invoice.blade.php ENDPATH**/ ?>