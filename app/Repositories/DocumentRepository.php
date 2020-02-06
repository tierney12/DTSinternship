<?php

namespace App\Repositories;

use App\Models\Document;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentRepository
 * @package App\Repositories
 * @version August 22, 2018, 9:08 am BST
 *
 * @method Document findWithoutFail($id, $columns = ['*'])
 * @method Document find($id, $columns = ['*'])
 * @method Document first($columns = ['*'])
*/
class DocumentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mimetype',
        'filesize',
        'filename',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Document::class;
    }
}
