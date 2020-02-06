<?php

namespace App\Repositories;

use App\Models\Note;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NoteRepository
 * @package App\Repositories
 * @version August 22, 2018, 9:08 am BST
 *
 * @method Note findWithoutFail($id, $columns = ['*'])
 * @method Note find($id, $columns = ['*'])
 * @method Note first($columns = ['*'])
*/
class NoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'note_text',
        'private',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Note::class;
    }
}
