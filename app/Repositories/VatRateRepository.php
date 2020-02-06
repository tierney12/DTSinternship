<?php

namespace App\Repositories;

use App\Models\VatRate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VatRateRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method VatRate findWithoutFail($id, $columns = ['*'])
 * @method VatRate find($id, $columns = ['*'])
 * @method VatRate first($columns = ['*'])
*/
class VatRateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'rate',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VatRate::class;
    }
}
