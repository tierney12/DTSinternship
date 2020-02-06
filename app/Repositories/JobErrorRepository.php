<?php

namespace App\Repositories;

use App\Models\JobError;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobErrorRepository
 * @package App\Repositories
 * @version August 22, 2018, 5:09 pm BST
 *
 * @method JobError findWithoutFail($id, $columns = ['*'])
 * @method JobError find($id, $columns = ['*'])
 * @method JobError first($columns = ['*'])
*/
class JobErrorRepository extends BaseRepository
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
