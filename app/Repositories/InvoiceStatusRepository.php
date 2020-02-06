<?php

namespace App\Repositories;

use App\Models\InvoiceStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceStatusRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method InvoiceStatus findWithoutFail($id, $columns = ['*'])
 * @method InvoiceStatus find($id, $columns = ['*'])
 * @method InvoiceStatus first($columns = ['*'])
*/
class InvoiceStatusRepository extends BaseRepository
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
        return InvoiceStatus::class;
    }
}
