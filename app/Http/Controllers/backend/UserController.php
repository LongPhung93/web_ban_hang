<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getAll()
    {
        $users = User::paginate(5);
        return view('backend.user.listuser',compact('users'));
    }
    public function create()
    {
        return view('backend.user.adduser');
    }
    public function store(AddUserRequest $request)
    {
        $user = new User();
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->name=$request->name;
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->role_id=$request->role_id;
        $user->save();
        return redirect()->route('user.getAll')->with('message','Đã thêm thành viên thành công');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user.edituser',compact('user'));
    }

    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name=$request->input('name');
        $user->address=$request->input('address');
        $user->phone=$request->input('phone');
        $user->role_id=$request->input('role_id');
        $user->save();
        return redirect()->route('user.getAll')->with('message','Đã sửa thành công');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.getAll')->with('message','Đã xóa thành công');
    }
}
