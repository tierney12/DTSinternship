<?php

namespace App\Repositories;

use App\Models\Activity;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActivityRepository
 * @package App\Repositories
 * @version August 22, 2018, 9:07 am BST
 *
 * @method Activity findWithoutFail($id, $columns = ['*'])
 * @method Activity find($id, $columns = ['*'])
 * @method Activity first($columns = ['*'])
*/
class ActivityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_by',
        'updated_by',
        'dentist_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Activity::class;
    }
}
