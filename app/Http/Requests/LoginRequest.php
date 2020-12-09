<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>'required|email|min:6',
            'password'=>'required|min:6'
        ];
    }

    public function messages()
    {
        return [
          'email.required'=>'email không được để trống',
          'email.email'=>'email không đúng định dạng',
          'email.min'=>'email có ít nhất 6 ký tự',
          'password.required'=>'password không được để trống',
          'password.min'=>'password có ít nhất 6 ký tự',
        ];
    }
}
