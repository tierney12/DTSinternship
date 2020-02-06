<?php

namespace App\Repositories;

use App\Models\ServiceReportRecipient;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceReportRecipientRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method ServiceReportRecipient findWithoutFail($id, $columns = ['*'])
 * @method ServiceReportRecipient find($id, $columns = ['*'])
 * @method ServiceReportRecipient first($columns = ['*'])
*/
class ServiceReportRecipientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'active',
        'Receives_admin',
        'Receives_director',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiceReportRecipient::class;
    }
}
