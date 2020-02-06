<?php

namespace App\Repositories;

use App\Models\JobUpdateItem;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobUpdateItemRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method JobUpdateItem findWithoutFail($id, $columns = ['*'])
 * @method JobUpdateItem find($id, $columns = ['*'])
 * @method JobUpdateItem first($columns = ['*'])
*/
class JobUpdateItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobUpdateItem::class;
    }
}
