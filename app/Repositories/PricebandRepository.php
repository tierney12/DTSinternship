<?php

namespace App\Repositories;

use App\Models\Priceband;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PricebandRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method Priceband findWithoutFail($id, $columns = ['*'])
 * @method Priceband find($id, $columns = ['*'])
 * @method Priceband first($columns = ['*'])
*/
class PricebandRepository extends BaseRepository
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
        return Priceband::class;
    }
}
