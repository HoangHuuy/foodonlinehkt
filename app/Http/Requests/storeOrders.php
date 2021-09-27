<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeOrders extends FormRequest
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
            'fullname' => ['required', 'max:32'],
            'phoneNumber' => ['required', 'numeric'],
            'address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Bạn cần thêm họ tên',
            'phoneNumber.required' => 'Bạn cần thêm số điện thoại',
            'address.required' => 'Bạn cần thêm địa chỉ',
        ];
    }
}
