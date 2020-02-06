<?php

namespace App\Repositories;

use App\Models\Estimate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstimateRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method Estimate findWithoutFail($id, $columns = ['*'])
 * @method Estimate find($id, $columns = ['*'])
 * @method Estimate first($columns = ['*'])
*/
class EstimateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'job_layout_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estimate::class;
    }
}
