<?php

namespace App\Repositories;

use App\Models\NoteType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NoteTypeRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:39 pm BST
 *
 * @method NoteType findWithoutFail($id, $columns = ['*'])
 * @method NoteType find($id, $columns = ['*'])
 * @method NoteType first($columns = ['*'])
*/
class NoteTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return NoteType::class;
    }
}
