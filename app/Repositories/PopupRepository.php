<?php

namespace App\Repositories;

use App\Models\Popup;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PopupRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method Popup findWithoutFail($id, $columns = ['*'])
 * @method Popup find($id, $columns = ['*'])
 * @method Popup first($columns = ['*'])
*/
class PopupRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'message',
        'date_added',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Popup::class;
    }
}
