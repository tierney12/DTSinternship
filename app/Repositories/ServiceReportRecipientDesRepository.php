<?php

namespace App\Repositories;

use App\Models\ServiceReportRecipientDes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceReportRecipientDesRepository
 * @package App\Repositories
 * @version August 20, 2018, 4:42 pm BST
 *
 * @method ServiceReportRecipientDes findWithoutFail($id, $columns = ['*'])
 * @method ServiceReportRecipientDes find($id, $columns = ['*'])
 * @method ServiceReportRecipientDes first($columns = ['*'])
*/
class ServiceReportRecipientDesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiceReportRecipientDes::class;
    }
}
