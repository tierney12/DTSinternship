<?php

namespace App\Repositories;

use App\Models\Visit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VisitRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method Visit findWithoutFail($id, $columns = ['*'])
 * @method Visit find($id, $columns = ['*'])
 * @method Visit first($columns = ['*'])
*/
class VisitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'visit_details_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Visit::class;
    }
}
