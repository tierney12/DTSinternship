<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceReportRequest extends FormRequest
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
            'job_id' => 'required',
            'description' => 'required',
            'service_report_issue_id' => 'required',
            'root_cause' => 'required',
            'resolution' => 'required',
            'tech_resolution' => 'required',
            'tech_ref' => 'integer|required',
            'cancelling_tech_ref' => 'integer|required',
            'report_to' => 'integer|required',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
