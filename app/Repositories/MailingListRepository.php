<?php

namespace App\Repositories;

use App\Models\MailingList;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MailingListRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method MailingList findWithoutFail($id, $columns = ['*'])
 * @method MailingList find($id, $columns = ['*'])
 * @method MailingList first($columns = ['*'])
*/
class MailingListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MailingList::class;
    }
}
