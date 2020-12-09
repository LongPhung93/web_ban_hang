<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = Product::paginate(5);
        return view('backend.product.listproduct',compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.addproduct',compact('categories'));
    }
    public function store(AddProductRequest $request)
    {
        $product = new Product();
        $product->sku=$request->sku;
        $product->name=$request->name;
        $product->slug=Str::slug($request->name);
        $product->price=$request->price;
        $product->featured=$request->featured;
        $product->state=$request->state;
        if ($request->hasFile('img')) {
            $file = $request->img;
            $file_name=STR::slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $product->img=$file_name;
        } else {
            $product->img='no-img.jpg';
        }
       $product->category_id = $request->category;
        $product->info=$request->info;
        $product->describe=$request->describe;
        $product->save();
        return redirect()->route('product.getAll')->with('message','Đã thêm sản phẩm thành công');


    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('backend.product.editproduct',compact('product','categories'));
    }

    public function update(EditProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name=$request->name;
        $product->slug=Str::slug($request->name);
        $product->price=$request->price;
        $product->featured=$request->featured;
        $product->state=$request->state;
        if ($request->hasFile('img')) {
            if ($product->img != 'no-img.jpg') {
                unlink('backend/img/'.$product->img);
            }
            $file = $request->img;
            $file_name=STR::slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$file_name);
            $product->img=$file_name;
        }
        $product->category_id = $request->category;
        $product->info=$request->info;
        $product->describe=$request->describe;
        $product->save();
        return redirect()->route('product.getAll')->with('message','Đã sửa sản phẩm thành công');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.getAll')->with('message','Đã xóa thành công');

    }
}
