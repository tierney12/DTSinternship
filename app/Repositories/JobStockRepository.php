<?php

namespace App\Repositories;

use App\Models\JobStock;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobStockRepository
 * @package App\Repositories
 * @version August 29, 2018, 3:37 pm BST
 *
 * @method JobStock findWithoutFail($id, $columns = ['*'])
 * @method JobStock find($id, $columns = ['*'])
 * @method JobStock first($columns = ['*'])
*/
class JobStockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_by',
        'job_id',
        'stock_id',
        'units',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobStock::class;
    }
}
