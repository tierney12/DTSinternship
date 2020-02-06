<?php

namespace App\Repositories;

use App\Models\Department;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version September 4, 2018, 3:14 pm BST
 *
 * @method Department findWithoutFail($id, $columns = ['*'])
 * @method Department find($id, $columns = ['*'])
 * @method Department first($columns = ['*'])
*/
class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'checklist_id',
        'crown_bridge_work',
        'pros_work',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Department::class;
    }
}
