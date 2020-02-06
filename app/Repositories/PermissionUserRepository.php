<?php

namespace App\Repositories;

use App\Models\PermissionUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermissionUserRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method PermissionUser findWithoutFail($id, $columns = ['*'])
 * @method PermissionUser find($id, $columns = ['*'])
 * @method PermissionUser first($columns = ['*'])
*/
class PermissionUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'permission_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermissionUser::class;
    }
}
