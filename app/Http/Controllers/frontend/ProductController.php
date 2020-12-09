<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::paginate(3);
        $categories = Category::all();
        return view('frontend.product.shop',compact('products','categories'));
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $productNews = Product::orderby('id','desc')->take(4)->get();
        return view('frontend.product.detail',compact('product','productNews'));
    }

    public function getProductByCategory($id)
    {
        $products = Product::where('category_id',$id)->paginate(3);
        $categories = Category::all();
        return view('frontend.product.shop',compact('products','categories'));
    }

    public function filter(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $products = Product::whereBetween('price', [$start, $end])->paginate(3);
        $categories = Category::all();
        return view('frontend.product.shop',compact('products','categories'));
    }
}
