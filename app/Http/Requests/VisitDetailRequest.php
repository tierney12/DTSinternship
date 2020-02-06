<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitDetailRequest extends FormRequest
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
            'visit_date' => 'required|date|date_format:d/m/Y',
            'phone_or_visit' => 'required',
            'details' => 'required',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
