<?php

namespace App\Repositories;

use App\Models\DentistSpend;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DentistSpendRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:42 pm BST
 *
 * @method DentistSpend findWithoutFail($id, $columns = ['*'])
 * @method DentistSpend find($id, $columns = ['*'])
 * @method DentistSpend first($columns = ['*'])
*/
class DentistSpendRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'spend_date',
        'units',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DentistSpend::class;
    }
}
