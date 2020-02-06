<?php

namespace App\Repositories;

use App\Models\ProductOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProductOptionRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:40 pm BST
 *
 * @method ProductOption findWithoutFail($id, $columns = ['*'])
 * @method ProductOption find($id, $columns = ['*'])
 * @method ProductOption first($columns = ['*'])
*/
class ProductOptionRepository extends BaseRepository
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
        return ProductOption::class;
    }
}
