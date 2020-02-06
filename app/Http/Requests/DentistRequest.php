<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DentistRequest extends FormRequest
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
        switch ($this->method()) {


            default:
                {
                    return [
                        'account_number' => 'required',
                        'customer_since' => 'required',
                        'title' => 'required',
                        'firstname' => 'required',
                        'surname' => 'required',
                        'phone_number' => 'required',
                        'mobile_number' => 'required',
                        'preferences' => 'nullable',
                        'recall_month' => 'integer|required',
                        'email' => 'required',
                        'gdc_number' => 'required',
                        'practice_id' => 'required',
                        'address_id' => 'required',
                        'area_id' => 'required',
                        'dentist_status_id' => 'required',
                        'priceband_id' => 'required',
                        'created_by' => 'integer|nullable',
                        'updated_by' => 'integer|nullable'
                    ];
                }
        }
    }
}
