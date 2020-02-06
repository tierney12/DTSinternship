<?php

namespace App\Repositories;

use App\Models\InfoSentToDentist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InfoSentToDentistRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method InfoSentToDentist findWithoutFail($id, $columns = ['*'])
 * @method InfoSentToDentist find($id, $columns = ['*'])
 * @method InfoSentToDentist first($columns = ['*'])
*/
class InfoSentToDentistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'date',
        'info_sent',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InfoSentToDentist::class;
    }
}
