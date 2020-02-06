<?php

namespace App\Repositories;

use App\Models\JobItem;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobItemRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method JobItem findWithoutFail($id, $columns = ['*'])
 * @method JobItem find($id, $columns = ['*'])
 * @method JobItem first($columns = ['*'])
*/
class JobItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'job_id',
        'products_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobItem::class;
    }
}
