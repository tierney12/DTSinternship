<?php

namespace App\Repositories;

use App\Models\Job;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobRepository
 * @package App\Repositories
 * @version August 23, 2018, 9:12 am BST
 *
 * @method Job findWithoutFail($id, $columns = ['*'])
 * @method Job find($id, $columns = ['*'])
 * @method Job first($columns = ['*'])
*/
class JobRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'department_id',
        'patient_name',
        'date_in',
        'date_due_out',
        'date_dispatched',
        'special_instructions',
        'shade',
        'impressions',
        'models',
        'estimate',
        'bites',
        'others',
        'remake',
        'invoiced',
        'remake_reason_id',
        'remake_date',
        'remake_original_ref',
        'job_no',
        'signed_for_by',
        'delivery_date',
        'job_layout_id',
        'nominal_code_id',
        'price_fixed',
        'lab_sheet_id',
        'input_error',
        'job_error_ref',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Job::class;
    }
}
