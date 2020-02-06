<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceDetailRequest extends FormRequest
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
            'products_id' => 'required',
            'invoice_id' => 'required',
            'amount' => 'numeric|required',
            'vat_rate_id' => 'required',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
