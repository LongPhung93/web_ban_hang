<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|min:6|unique:users,email',
            'password'=>'required|min:5',
            'name'=>'required|min:3|unique:users,name',
            'address'=>'required|min:3',
            'phone'=>'required|min:9|unique:users,phone'
        ];
    }
}
