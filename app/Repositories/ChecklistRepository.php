<?php

namespace App\Repositories;

use App\Models\Checklist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChecklistRepository
 * @package App\Repositories
 * @version September 4, 2018, 3:27 pm BST
 *
 * @method Checklist findWithoutFail($id, $columns = ['*'])
 * @method Checklist find($id, $columns = ['*'])
 * @method Checklist first($columns = ['*'])
*/
class ChecklistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'item6',
        'item7',
        'item8',
        'item9',
        'item10',
        'item11',
        'item12',
        'item13',
        'item14',
        'item15',
        'item16',
        'item17',
        'item18',
        'item19',
        'item20',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Checklist::class;
    }
}
