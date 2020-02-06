<?php

namespace App\Repositories;

use App\Models\DentistStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DentistStatusRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method DentistStatus findWithoutFail($id, $columns = ['*'])
 * @method DentistStatus find($id, $columns = ['*'])
 * @method DentistStatus first($columns = ['*'])
*/
class DentistStatusRepository extends BaseRepository
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
        return DentistStatus::class;
    }
}
