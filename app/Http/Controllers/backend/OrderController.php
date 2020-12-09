<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::where('state',0)->orderby('id','desc')->paginate(5);
        return view('backend.order.order',compact('orders'));
    }
    public function detail($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.order.detail',compact('order'));
    }
    public function processed()
    {
        $orders = Order::where('state',1)->orderby('id','desc')->paginate(5);
        return view('backend.order.processed',compact('orders'));
    }

    public function handle($id)
    {
        $order = Order::findOrFail($id);
        $order->state = 1;
        $order->save();
        return redirect()->route('order.processed');
    }
}
