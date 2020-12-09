<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IndexController extends Controller
{
    public function index()
    {
        if (Gate::allows('crud-user')){
            return view('backend.index');
        } else {
            return redirect()->route('index');
        }

    }
}
