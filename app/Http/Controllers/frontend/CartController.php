<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($request->has('quantity')){
            $quantity = $request->quantity;
        } else {
            $quantity = 1;
        }

        Cart::add(['id' => $product->sku,
            'name' => $product->name,
            'qty' => $quantity,
            'price' => $product->price,
            'weight' => 0,
            'options' => ['img' => $product->img]
        ]);
        return redirect()->route('cart.getAll');

    }

    public function getAll()
    {
        $carts = Cart::content();
        $total = Cart::total(0, '.', ',');
        return view('frontend.cart.cart', compact('carts', 'total'));
    }

    function update(Request $request) {

        $rowId = $request->rowId;
        $quantity = $request->quantity;
        Cart::update($rowId, $quantity);
        $res = [
            'message' => 'success',
            'item' => Cart::get($rowId),
            'totalCart' => Cart::total(0,'',',')
        ];

        return response()->json($res);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
  }
}
