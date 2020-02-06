<?php

namespace App\Repositories;

use App\Models\Staff;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StaffRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method Staff findWithoutFail($id, $columns = ['*'])
 * @method Staff find($id, $columns = ['*'])
 * @method Staff first($columns = ['*'])
*/
class StaffRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tech',
        'user_id',
        'surname',
        'firstname',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Staff::class;
    }
}
