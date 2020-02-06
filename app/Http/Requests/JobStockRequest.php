<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobStockRequest extends FormRequest
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
            'created_by' => 'integer|nullable',
            'job_id' => 'required',
            'stock_id' => 'required',
            'units' => 'integer|required',
            'updated_by' => 'integer|nullable'
        ];
    }
}
