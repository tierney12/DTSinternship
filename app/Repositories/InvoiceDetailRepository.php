<?php

namespace App\Repositories;

use App\Models\InvoiceDetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceDetailRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:26 pm BST
 *
 * @method InvoiceDetail findWithoutFail($id, $columns = ['*'])
 * @method InvoiceDetail find($id, $columns = ['*'])
 * @method InvoiceDetail first($columns = ['*'])
*/
class InvoiceDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'products_id',
        'invoice_id',
        'amount',
        'vat_rate_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InvoiceDetail::class;
    }
}
