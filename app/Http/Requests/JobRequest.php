<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
////            'id' => 'required',
//            'jobs[dentist_id]' => 'required',
//            'jobs[department_id]' => 'required',
//            'jobs[patient_name]' => 'required',
//            'jobs[date_in]' => 'required',
//            'jobs[date_due_out]' => 'required',
//            'jobs[date_dispatched]' => 'nullable',
//            'jobs[special_instructions]' => 'nullable',
//            'jobs[shade]' => 'required',
//            'jobs[impressions]' => 'integer|required',
//            'jobs[models]' => 'integer|nullable',
//            'jobs[others]' => 'integer|nullable',
////            'remake' => 'required',
//            'jobs[remake_reason_id]' => 'nullable',
//            'jobs[remake_date]' => 'nullable',
//            'jobs[remake_original_ref]' => 'nullable',
//            'jobs[job_no]' => 'required',
//            'jobs[signed_for_by]' => 'nullable',
//            'jobs[delivery_date]' => 'nullable',
//            'jobs[job_layout_id]' => 'required',
//            'jobs[nominal_code_id]' => 'required',
//            'jobs[lab_sheet_id]' => 'nullable',
//            'jobs[job_error_ref]' => 'integer|nullable',
//            'jobs[created_by]' => 'integer|nullable',
//            'jobs[updated_by]' => 'integer|nullable'
        ];
    }
}
