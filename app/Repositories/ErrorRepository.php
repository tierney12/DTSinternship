<?php

namespace App\Repositories;

use App\Models\JobError;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ErrorRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method JobError findWithoutFail($id, $columns = ['*'])
 * @method JobError find($id, $columns = ['*'])
 * @method JobError first($columns = ['*'])
*/
class ErrorRepository extends BaseRepository
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
        return JobError::class;
    }
}
