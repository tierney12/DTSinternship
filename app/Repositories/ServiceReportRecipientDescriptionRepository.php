<?php

namespace App\Repositories;

use App\Models\ServiceReportRecipientDescription;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceReportRecipientDescriptionRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method ServiceReportRecipientDescription findWithoutFail($id, $columns = ['*'])
 * @method ServiceReportRecipientDescription find($id, $columns = ['*'])
 * @method ServiceReportRecipientDescription first($columns = ['*'])
*/
class ServiceReportRecipientDescriptionRepository extends BaseRepository
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
        return ServiceReportRecipientDescription::class;
    }
}
