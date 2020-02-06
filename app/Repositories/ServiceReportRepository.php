<?php

namespace App\Repositories;

use App\Models\ServiceReport;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ServiceReportRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method ServiceReport findWithoutFail($id, $columns = ['*'])
 * @method ServiceReport find($id, $columns = ['*'])
 * @method ServiceReport first($columns = ['*'])
*/
class ServiceReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dentist_id',
        'job_id',
        'description',
        'service_report_issue_id',
        'root_cause',
        'resolution',
        'tech_resolution',
        'tech_ref',
        'cancelling_tech_ref',
        'report_to',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ServiceReport::class;
    }
}
