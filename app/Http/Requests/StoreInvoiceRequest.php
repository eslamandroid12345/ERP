<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
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

            'invoice_number' => 'required',
            'invoice_date' => 'required',
            'client_id' => 'required|exists:clients,id',
            'product_name' => 'required',
            'quantity' => 'required',
            'total_amount' => 'required',
            'total_paid' => 'required'

        ];
    }


    public function messages()
    {
        return [


            'invoice_number.required' => 'The invoice number is required',
            'invoice_date.required' => 'The invoice date is required',
            'client_id.required' => 'The client of invoice is required',
            'client_id.exists' => 'This client not exists',
            'product_name.required' => 'Product name is required',
            'quantity.required' => 'quantity of product is required',
            'total_amount.required' => 'total amount of product is required',
            'total_paid.required' => 'total paid of invoice is required'

        ];
    }
}
