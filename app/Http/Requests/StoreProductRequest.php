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
    public function rules()
    {
        return [


            'product_name' => 'required',
            'sell_price' => 'required',

        ];
    }

    public function messages()
    {
        return [

            'product_name.required' => 'The product name is required',
            'sell_price.required' => 'The product sell price is required',



        ];
    }
}
