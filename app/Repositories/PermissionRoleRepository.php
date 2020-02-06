<?php

namespace App\Repositories;

use App\Models\PermissionRole;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermissionRoleRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method PermissionRole findWithoutFail($id, $columns = ['*'])
 * @method PermissionRole find($id, $columns = ['*'])
 * @method PermissionRole first($columns = ['*'])
*/
class PermissionRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'permission_id',
        'role_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermissionRole::class;
    }
}
