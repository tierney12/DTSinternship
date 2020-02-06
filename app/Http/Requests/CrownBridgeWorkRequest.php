<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrownBridgeWorkRequest extends FormRequest
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
            'models_tech' => 'integer|nullable',
            'models_units' => 'integer|nullable',
            'trim_die_tech' => 'integer|nullable',
            'trim_die_units' => 'integer|nullable',
            'articulate_tech' => 'integer|nullable',
            'articulate_units' => 'integer|nullable',
            'scan_tech' => 'integer|nullable',
            'scan_units' => 'integer|nullable',
            'gold_work_tech' => 'integer|nullable',
            'gold_work_units' => 'integer|nullable',
            'foil_and_core_tech' => 'integer|nullable',
            'foil_and_core_units' => 'integer|nullable',
            'opaque_tech' => 'integer|nullable',
            'opaque_units' => 'integer|nullable',
            'build_up_tech' => 'integer|nullable',
            'build_up_units' => 'integer|nullable',
            'stone/grind_in_tech' => 'integer|nullable',
            'stone/grind_in_units' => 'integer|nullable',
            'glaze_tech' => 'integer|nullable',
            'glaze_units' => 'integer|nullable',
            'fit_tech' => 'integer|nullable',
            'fit_units' => 'integer|nullable',
            'other_tech' => 'integer|nullable',
            'other_units' => 'integer|nullable',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
