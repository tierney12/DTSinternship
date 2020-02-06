<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ServiceReport
 * @package App\Models
 * @version August 21, 2018, 1:25 pm BST
 *
 * @property \App\Models\Staff staff
 * @property \App\Models\User user
 * @property \App\Models\Dentist dentist
 * @property \App\Models\Job job
 * @property \App\Models\ServiceReportsRecipientsDescription serviceReportRecipientsDescription
 * @property \App\Models\ServiceReportsIssue serviceReportsIssue
 * @property \App\Models\Staff staff
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatus
 * @property \Illuminate\Database\Eloquent\Collection jobErrors
 * @property \Illuminate\Database\Eloquent\Collection jobLayouts
 * @property \Illuminate\Database\Eloquent\Collection jobUpdateItems
 * @property \Illuminate\Database\Eloquent\Collection labSheets
 * @property \Illuminate\Database\Eloquent\Collection mailingLists
 * @property \Illuminate\Database\Eloquent\Collection nominalCodes
 * @property \Illuminate\Database\Eloquent\Collection noteTypes
 * @property \Illuminate\Database\Eloquent\Collection notes
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection practices
 * @property \Illuminate\Database\Eloquent\Collection pricebands
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection productOptions
 * @property \Illuminate\Database\Eloquent\Collection remakeReasons
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection serviceReportIssues
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipients
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipientsDescriptions
 * @property \Illuminate\Database\Eloquent\Collection statements
 * @property \Illuminate\Database\Eloquent\Collection stocks
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection vatRates
 * @property \Illuminate\Database\Eloquent\Collection visitDetails
 * @property integer dentist_id
 * @property integer job_id
 * @property string description
 * @property integer service_report_issue_id
 * @property string root_cause
 * @property string resolution
 * @property string tech_resolution
 * @property integer tech_ref
 * @property integer cancelling_tech_ref
 * @property integer report_to
 * @property integer created_by
 * @property integer updated_by
 */
class ServiceReport extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'service_reports';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dentist_id' => 'integer',
        'job_id' => 'integer',
        'description' => 'string',
        'service_report_issue_id' => 'integer',
        'root_cause' => 'string',
        'resolution' => 'string',
        'tech_resolution' => 'string',
        'tech_ref' => 'integer',
        'cancelling_tech_ref' => 'integer',
        'report_to' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dentist_id' => 'required',
        'job_id' => 'required',
        'description' => 'required',
        'service_report_issue_id' => 'required',
        'root_cause' => 'required',
        'resolution' => 'required',
        'tech_resolution' => 'required',
        'tech_ref' => 'integer|required',
        'cancelling_tech_ref' => 'integer|required',
        'report_to' => 'integer|required',
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function serviceReportRecipientsDescription()
    {
        return $this->belongsTo(ServiceReportsRecipientsDescription::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function serviceReportsIssue()
    {
        return $this->belongsTo(ServiceReportsIssue::class);
    }
}
