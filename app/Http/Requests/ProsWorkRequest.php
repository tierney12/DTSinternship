<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProsWorkRequest extends FormRequest
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
            'cast_models_tech' => 'integer|nullable',
            'cast_models_units' => 'integer|nullable',
            'special_tray_tech' => 'integer|nullable',
            'special_tray_units' => 'integer|nullable',
            'duplicate_tech' => 'integer|nullable',
            'duplicate_units' => 'integer|nullable',
            'record_block_tech' => 'integer|nullable',
            'record_block_units' => 'integer|nullable',
            'replica_block_tech' => 'integer|nullable',
            'replica_block_units' => 'integer|nullable',
            'articulate_tech' => 'integer|nullable',
            'articulate_units' => 'integer|nullable',
            'design_tech' => 'integer|nullable',
            'design_units' => 'integer|nullable',
            'wax_up_tech' => 'integer|nullable',
            'wax_up_units' => 'integer|nullable',
            'trial_tech' => 'integer|nullable',
            'trial_units' => 'integer|nullable',
            're_trail_tech' => 'integer|nullable',
            're_trail_units' => 'integer|nullable',
            'reset_finish_tech' => 'integer|nullable',
            'reset_finish_units' => 'integer|nullable',
            'wax_finish_tech' => 'integer|nullable',
            'wax_finish_units' => 'integer|nullable',
            'flask_tech' => 'integer|nullable',
            'flask_units' => 'integer|nullable',
            'deflask_tech' => 'integer|nullable',
            'deflask_units' => 'integer|nullable',
            'trim_tech' => 'integer|nullable',
            'trim_units' => 'integer|nullable',
            'polish_tech' => 'integer|nullable',
            'polish_units' => 'integer|nullable',
            'repair_tech' => 'integer|nullable',
            'repair_units' => 'integer|nullable',
            'other_tech' => 'integer|nullable',
            'other_units' => 'integer|nullable',
            'created_by' => 'integer|nullable',
            'updated_by' => 'integer|nullable'
        ];
    }
}
