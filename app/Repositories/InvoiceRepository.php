<?php

namespace App\Repositories;

use App\Models\Invoice;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method Invoice findWithoutFail($id, $columns = ['*'])
 * @method Invoice find($id, $columns = ['*'])
 * @method Invoice first($columns = ['*'])
*/
class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jobs_id',
        'invoice_status_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Invoice::class;
    }

    public function delete($id){
        dd($id);
        $invoice = Invoice::where('id', $id)->get();
        $invoice->deleted_at = new DateTime();
    }
}
