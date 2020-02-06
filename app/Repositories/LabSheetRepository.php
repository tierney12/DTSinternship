<?php

namespace App\Repositories;

use App\Models\LabSheet;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LabSheetRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:40 pm BST
 *
 * @method LabSheet findWithoutFail($id, $columns = ['*'])
 * @method LabSheet find($id, $columns = ['*'])
 * @method LabSheet first($columns = ['*'])
*/
class LabSheetRepository extends BaseRepository
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
        return LabSheet::class;
    }
}
