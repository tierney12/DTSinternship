<?php

namespace App\Repositories;

use App\Models\JobUpdate;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobUpdateRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method JobUpdate findWithoutFail($id, $columns = ['*'])
 * @method JobUpdate find($id, $columns = ['*'])
 * @method JobUpdate first($columns = ['*'])
*/
class JobUpdateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'job_id',
        'job_update_item_id',
        'technician_ref',
        'units',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobUpdate::class;
    }
}
