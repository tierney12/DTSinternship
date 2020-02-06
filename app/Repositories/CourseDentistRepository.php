<?php

namespace App\Repositories;

use App\Models\CourseDentist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CourseDentistRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method CourseDentist findWithoutFail($id, $columns = ['*'])
 * @method CourseDentist find($id, $columns = ['*'])
 * @method CourseDentist first($columns = ['*'])
*/
class CourseDentistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'course_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CourseDentist::class;
    }
}
