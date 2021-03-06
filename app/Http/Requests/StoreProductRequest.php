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
               'name' => 'required',
               'category_id' => 'required',
               'content' => 'required',
               'status' => 'required',
               'origin_price' => 'required|numeric',
               'sale_price' => 'required|numeric',
               'quantity' => 'required|numeric|min:1',
               'model' => 'required|max:20' 
       ];
   }

   public function messages()
   {
       return [
           'required' => ':attribute không được để trống',
           'min' => ':attribute không được nhỏ hơn :min',
           'max' => ':attribute không được lớn hơn :max',
           'numeric' => ':attribute phải là số',
       ];
   }

   public function attributes()
   {
       return [
           'name' => 'Tên sản phẩm',
           'origin_price' => 'Giá sản phẩm',
           'sale_price' => 'Giá bán',
           'content' => 'Mô tả sản phẩm',
           'quantity' => 'Số Lượng sản phẩm',
           'model' => 'Nhãn hiệu sản phẩm'
       ];
   }
}
