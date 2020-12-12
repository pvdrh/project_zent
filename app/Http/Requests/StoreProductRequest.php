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
               'name' => 'required|max:255',
               'category_id' => 'required',
               'content' => 'required',
               'status' => 'required',
               'origin_price' => 'required|numeric',
               'sale_price' => 'required|numeric',
            //    'images' => 'required|max:2048',
               'quantity' => 'required|numeric|min:1',
               'model' => 'required|max:20',
            //    'avatar' => 'required|max:1024'
       ];
   }

   public function messages()
   {
       return [
           'required' => ':attribute không được để trống',
           'min' => ':attribute không được nhỏ hơn :min',
           'max' => ':attribute không được lớn hơn :max',
           'numeric' => ':attribute phải là số',
           'image[]' => ':attribute file bắt buộc',
           'avatar' => ':attribute avatar bắt buộc'
       ];
   }

   public function attributes()
   {
       return [
           'name' => 'Tên sản phẩm',
           'origin_price' => 'Giá sản phẩm',
           'sale_price' => 'Giá bán',
           'content' => 'Mô tả sản phẩm',
           'image[]' => 'Ảnh sản phẩm',
           'quantity' => 'Số Lượng sản phẩm',
           'model' => 'Nhãn hiệu sản phẩm',
           'avatar' => 'Ảnh đại diện sản phẩm' 
       ];
   }
}
