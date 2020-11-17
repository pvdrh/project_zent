<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
   //  Cách 2 validated
   public function rules()
   {
       return [
               'name' => 'required|min:10|max:255',
               'category_id' => 'required',
               'content' => 'required',
               'status' => 'required',
               'origin_price' => 'required|numeric',
               'sale_price' => 'required|numeric',
               'image[]' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
       ];
   }

   public function messages()
   {
       return [
           'required' => ':attribute không được để trống',
           'min' => ':attribute không được nhỏ hơn :min',
           'max' => ':attribute không được lớn hơn :max',
           'numeric' => ':attribute phải là số',
           'image[]' => ':attribute file bắt buộc'
       ];
   }

   public function attributes()
   {
       return [
           'name' => 'Tên sản phẩm',
           'origin_price' => 'Giá sản phẩm',
           'sale_price' => 'Giá bán',
           'content' => 'Mô tả sản phẩm',
           'image[]' => 'Ảnh sản phẩm'
       ];
   }
}
