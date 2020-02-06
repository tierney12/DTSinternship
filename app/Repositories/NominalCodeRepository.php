<?php

namespace App\Repositories;

use App\Models\NominalCode;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NominalCodeRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method NominalCode findWithoutFail($id, $columns = ['*'])
 * @method NominalCode find($id, $columns = ['*'])
 * @method NominalCode first($columns = ['*'])
*/
class NominalCodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nominal_codes',
        'description',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NominalCode::class;
    }
}
