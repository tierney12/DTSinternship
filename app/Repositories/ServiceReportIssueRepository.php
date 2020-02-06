<?php

namespace App\Repositories;

use App\Models\ServiceReportIssue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceReportIssueRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:41 pm BST
 *
 * @method ServiceReportIssue findWithoutFail($id, $columns = ['*'])
 * @method ServiceReportIssue find($id, $columns = ['*'])
 * @method ServiceReportIssue first($columns = ['*'])
*/
class ServiceReportIssueRepository extends BaseRepository
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
        return ServiceReportIssue::class;
    }
}
