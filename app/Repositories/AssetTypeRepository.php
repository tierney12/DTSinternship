<?php

namespace App\Repositories;

use App\Models\AssetType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AssetTypeRepository
 * @package App\Repositories
 * @version August 22, 2018, 4:46 pm BST
 *
 * @method AssetType findWithoutFail($id, $columns = ['*'])
 * @method AssetType find($id, $columns = ['*'])
 * @method AssetType first($columns = ['*'])
*/
class AssetTypeRepository extends BaseRepository
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
        return AssetType::class;
    }
}
