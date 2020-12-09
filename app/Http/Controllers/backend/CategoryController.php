<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function getAll()
    {
        $categories = Category::all();
        return view('backend.category.category', compact('categories'));
    }

    public function store(AddCategoryRequest $request)
    {
        $categories = Category::all();
        if (getLevel($categories, $request->parent, 1) > 3) {
            return redirect()->back()->with('error', 'Chỉ tạo tối đa danh mục 2 cấp');
        }
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->parent = $request->parent;
        $category->save();
        return redirect()->back()->with('message', 'Đã thêm danh mục' . " $request->name " . 'thành công');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        return view('backend.category.editcategory', compact('category', 'categories'));
    }

    public function update(EditCategoryRequest $request,$id)
    {
        $categories = Category::all();
        if (getLevel($categories, $request->parent, 1) > 3) {
            return redirect()->back()->with('error', 'Danh mục tối đa có 2 cấp');
        }
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->parent = $request->parent;
        $category->save();
        return redirect()->back()->with('message','Đã sửa thành công danh mục');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Category::where('parent',$id)->update(['parent'=>$category->parent]);
        $category->delete();
        return redirect()->route('category.getAll');
    }
}
