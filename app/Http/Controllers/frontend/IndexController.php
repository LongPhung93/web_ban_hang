<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $productNews = Product::orderby('id','desc')->take(4)->get();
        $productFeatureds = Product::where('featured',1)->take(4)->get();
        return view('frontend.index',compact('productNews','productFeatureds'));
    }
    public function About()
    {
        return view('frontend.about');
    }
    public function Contact()
    {
        return view('frontend.contact');
    }
}
