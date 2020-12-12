<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|min:6|max:30',
            'role' => 'required',
            'phone' => 'required|max:10'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute không được nhỏ hơn :min',
            'max' => ':attribute không được lớn hơn :max'
        ];
    }
 
    public function attributes()
    {
        return [
            'name' => 'Tên người dùng',
            'role' => 'Quyền',
            'phone' => 'SĐT',
            'email' => 'Mail',
            'password' => 'Mật khẩu'
        ];
    }
}
