

<?php $__env->startSection('main_content'); ?>
<div class="page-top">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($global_page_data->cart_heading); ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="row cart">
            <div class="col-md-12">
                

                <?php if(session()->has('cart_room_id')): ?>

                <div class="table-responsive">
                    <table class="table table-bordered table-cart">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Serial</th>
                                <th>Photo</th>
                                <th>Room Info</th>
                                <th>Price/Night</th>
                                <th>Checkin</th>
                                <th>Checkout</th>
                                <th>Guests</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $arr_cart_room_id = array();
                            $i=0;
                            foreach(session()->get('cart_room_id') as $value) {
                                $arr_cart_room_id[$i] = $value;
                                $i++;
                            }

                            $arr_cart_checkin_date = array();
                            $i=0;
                            foreach(session()->get('cart_checkin_date') as $value) {
                                $arr_cart_checkin_date[$i] = $value;
                                $i++;
                            }

                            $arr_cart_checkout_date = array();
                            $i=0;
                            foreach(session()->get('cart_checkout_date') as $value) {
                                $arr_cart_checkout_date[$i] = $value;
                                $i++;
                            }

                            $arr_cart_adult = array();
                            $i=0;
                            foreach(session()->get('cart_adult') as $value) {
                                $arr_cart_adult[$i] = $value;
                                $i++;
                            }

                            $arr_cart_children = array();
                            $i=0;
                            foreach(session()->get('cart_children') as $value) {
                                $arr_cart_children[$i] = $value;
                                $i++;
                            }

                            $total_price = 0;
                            for($i=0;$i<count($arr_cart_room_id);$i++)
                            {
                                $room_data = DB::table('rooms')->where('id',$arr_cart_room_id[$i])->first();
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('cart_delete',$arr_cart_room_id[$i])); ?>" class="cart-delete-link" onclick="return confirm('Are you sure?');"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td><?php echo e($i+1); ?></td>
                                    <td><img src="<?php echo e(asset('uploads/'.$room_data->featured_photo)); ?>"></td>
                                    <td>
                                        <a href="<?php echo e(route('room_detail',$room_data->id)); ?>" class="room-name"><?php echo e($room_data->name); ?></a>
                                    </td>
                                    <td>$<?php echo e($room_data->price); ?></td>
                                    <td><?php echo e($arr_cart_checkin_date[$i]); ?></td>
                                    <td><?php echo e($arr_cart_checkout_date[$i]); ?></td>
                                    <td>
                                        Adult: <?php echo e($arr_cart_adult[$i]); ?><br>
                                        Children: <?php echo e($arr_cart_children[$i]); ?>

                                    </td>
                                    <td>
                                    <?php
                                        $d1 = explode('/',$arr_cart_checkin_date[$i]);
                                        $d2 = explode('/',$arr_cart_checkout_date[$i]);
                                        $d1_new = $d1[2].'-'.$d1[1].'-'.$d1[0];
                                        $d2_new = $d2[2].'-'.$d2[1].'-'.$d2[0];
                                        $t1 = strtotime($d1_new);
                                        $t2 = strtotime($d2_new);
                                        $diff = ($t2-$t1)/60/60/24;
                                        echo '$'.$room_data->price*$diff;
                                    ?>
                                    </td>
                                </tr>
                                <?php
                                $total_price = $total_price+($room_data->price*$diff);
                            }
                            ?>                            
                            <tr>
                                <td colspan="8" class="tar">Total:</td>
                                <td>$<?php echo e($total_price); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="checkout mb_20">
                    <a href="<?php echo e(route('checkout')); ?>" class="btn btn-primary bg-website">Checkout</a>
                </div>

                <?php else: ?>

                <div class="text-danger mb_30">
                    Cart is empty!
                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\online_room_booking\resources\views/front/cart.blade.php ENDPATH**/ ?>