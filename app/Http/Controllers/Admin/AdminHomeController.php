<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Subscriber;

class AdminHomeController extends Controller
{
    public function index()
    {
        $total_completed_orders = Order::where('status','Completed')->count();
        $total_pending_orders = Order::where('status','Pending')->count();
        $total_active_customers = Customer::where('status',1)->count();
        $total_pending_customers = Customer::where('status',0)->count();
        $total_rooms = Room::count();
        $total_subscribers = Subscriber::where('status',1)->count();

        $orders = Order::orderBy('id','desc')->skip(0)->take(5)->get();

        return view('admin.home', compact('total_completed_orders','total_pending_orders','total_active_customers','total_pending_customers','total_rooms','total_subscribers','orders'));
    }
}
