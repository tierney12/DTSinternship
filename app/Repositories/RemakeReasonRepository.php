<?php

namespace App\Repositories;

use App\Models\RemakeReason;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RemakeReasonRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method RemakeReason findWithoutFail($id, $columns = ['*'])
 * @method RemakeReason find($id, $columns = ['*'])
 * @method RemakeReason first($columns = ['*'])
*/
class RemakeReasonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RemakeReason::class;
    }
}
