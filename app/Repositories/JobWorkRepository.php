<?php

namespace App\Repositories;

use App\Models\JobWork;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobWorkRepository
 * @package App\Repositories
 * @version September 4, 2018, 3:08 pm BST
 *
 * @method JobWork findWithoutFail($id, $columns = ['*'])
 * @method JobWork find($id, $columns = ['*'])
 * @method JobWork first($columns = ['*'])
*/
class JobWorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'job_id',
        'pros_work_id',
        'crown_bridge_work_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobWork::class;
    }
}
