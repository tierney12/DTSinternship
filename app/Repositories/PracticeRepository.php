<?php

namespace App\Repositories;

use App\Models\Practice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PracticeRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method Practice findWithoutFail($id, $columns = ['*'])
 * @method Practice find($id, $columns = ['*'])
 * @method Practice first($columns = ['*'])
*/
class PracticeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'practice_manager',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Practice::class;
    }
}
