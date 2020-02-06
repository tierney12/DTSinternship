<?php

namespace App\Repositories;

use App\Models\Dentist;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DentistRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method Dentist findWithoutFail($id, $columns = ['*'])
 * @method Dentist find($id, $columns = ['*'])
 * @method Dentist first($columns = ['*'])
*/
class DentistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'account_number',
        'customer_since',
        'active',
        'mailing_list_opt_in',
        'title',
        'firstname',
        'surname',
        'phone_number',
        'mobile_number',
        'vocational_training',
        'essential_account',
        'preferences',
        'recall_month',
        'email',
        'gdc_number',
        'practice_id',
        'address_id',
        'area_id',
        'dentist_status_id',
        'priceband_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dentist::class;
    }

}
