<?php

namespace App\Repositories;

use App\Models\EstimateDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstimateDetailRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method EstimateDetail findWithoutFail($id, $columns = ['*'])
 * @method EstimateDetail find($id, $columns = ['*'])
 * @method EstimateDetail first($columns = ['*'])
*/
class EstimateDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estimate_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EstimateDetail::class;
    }
}
