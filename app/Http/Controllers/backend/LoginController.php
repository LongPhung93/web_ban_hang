<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.login.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email'=>$email,'password'=>$password])) {

                return redirect()->route('index');

        } else {
            return redirect()->back()->with('message','Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function showRegister()
    {
        return view('backend.login.register');
    }
    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }
}
