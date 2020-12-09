<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use App\Models\ProductOrder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function getAll()
    {
        $carts = Cart::content();
        $total = Cart::total(0, '.', ',');
        return view('frontend.checkout.checkout',compact('carts','total'));
    }
    public function getOrder(CheckoutRequest $request)
    {
        $order = new Order();
        $order->name=$request->name;
        $order->email=$request->email;
        $order->address=$request->address;
        $order->phone=$request->phone;
        $order->state=0;
        $order->total=Cart::total(0,'','');
        $order->save();
        $carts = Cart::content();
        foreach ($carts as $cart){
                $productOrder = new ProductOrder();
                $productOrder->sku=$cart->id;
                $productOrder->name=$cart->name;
                $productOrder->price=$cart->price;
                $productOrder->quantity=$cart->qty;
                $productOrder->img=$cart->options->img;
                $productOrder->order_id=$order->id;
                $productOrder->save();
        }

       return redirect()->route('checkout.complete', $order->id);
    }
    public function complete($orderId)
    {
        $order = Order::findOrFail($orderId);
        Cart::destroy();
        return view('frontend.checkout.complete',compact('order'));
    }
}
