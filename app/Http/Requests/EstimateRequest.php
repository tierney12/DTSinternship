<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstimateRequest extends FormRequest
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
            'dentist_id' => 'required',
            'job_layout_id' => 'required',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
