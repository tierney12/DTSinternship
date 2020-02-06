<?php

namespace App\Repositories;

use App\Models\VisitDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VisitDetailRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method VisitDetail findWithoutFail($id, $columns = ['*'])
 * @method VisitDetail find($id, $columns = ['*'])
 * @method VisitDetail first($columns = ['*'])
*/
class VisitDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'visit_date',
        'phone_or_visit',
        'details',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VisitDetail::class;
    }
}
