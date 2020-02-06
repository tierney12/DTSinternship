<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobWorkRequest extends FormRequest
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
            'job_id' => 'required',
            'pros_work_id' => 'nullable',
            'crown_bridge_work_id' => 'nullable',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
