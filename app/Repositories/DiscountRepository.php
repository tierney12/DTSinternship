<?php

namespace App\Repositories;

use App\Models\Discount;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DiscountRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method Discount findWithoutFail($id, $columns = ['*'])
 * @method Discount find($id, $columns = ['*'])
 * @method Discount first($columns = ['*'])
*/
class DiscountRepository extends BaseRepository
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
        return Discount::class;
    }
}
