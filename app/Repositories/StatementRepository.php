<?php

namespace App\Repositories;

use App\Models\Statement;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StatementRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:40 pm BST
 *
 * @method Statement findWithoutFail($id, $columns = ['*'])
 * @method Statement find($id, $columns = ['*'])
 * @method Statement first($columns = ['*'])
*/
class StatementRepository extends BaseRepository
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
        return Statement::class;
    }
}
