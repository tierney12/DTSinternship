<?php

namespace App\Repositories;

use App\Models\Asset;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AssetRepository
 * @package App\Repositories
 * @version August 22, 2018, 4:45 pm BST
 *
 * @method Asset findWithoutFail($id, $columns = ['*'])
 * @method Asset find($id, $columns = ['*'])
 * @method Asset first($columns = ['*'])
*/
class AssetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'file_name',
        'storage_path',
        'file_size',
        'asset_type_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asset::class;
    }
}
