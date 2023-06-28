<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo e(route('customer_home')); ?>">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo e(route('customer_home')); ?>"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="<?php echo e(Request::is('customer/home') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('customer_home')); ?>"><i class="fa fa-hand-o-right"></i> <span>Dashboard</span></a></li>

            <li class="<?php echo e(Request::is('customer/order/*') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(route('customer_order_view')); ?>"><i class="fa fa-hand-o-right"></i> <span>Orders</span></a></li>


            


            


        </ul>
    </aside>
</div><?php /**PATH D:\xampp\htdocs\online_hotel_booking\resources\views/customer/layout/sidebar.blade.php ENDPATH**/ ?>