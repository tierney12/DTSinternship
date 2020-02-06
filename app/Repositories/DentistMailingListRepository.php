<?php

namespace App\Repositories;

use App\Models\DentistMailingList;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DentistMailingListRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method DentistMailingList findWithoutFail($id, $columns = ['*'])
 * @method DentistMailingList find($id, $columns = ['*'])
 * @method DentistMailingList first($columns = ['*'])
*/
class DentistMailingListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'mailing_list_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DentistMailingList::class;
    }
}
