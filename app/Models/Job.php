<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job
 * @package App\Models
 * @version August 23, 2018, 9:12 am BST
 *
 * @property \App\Models\User user
 * @property \App\Models\Dentist dentist
 * @property \App\Models\Department department
 * @property \App\Models\JobLayout jobLayout
 * @property \App\Models\LabSheet labSheet
 * @property \App\Models\NominalCode nominalCode
 * @property \App\Models\RemakeReason remakeReason
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection assetTypes
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatuses
 * @property \Illuminate\Database\Eloquent\Collection Invoice
 * @property \Illuminate\Database\Eloquent\Collection jobErrors
 * @property \Illuminate\Database\Eloquent\Collection JobItem
 * @property \Illuminate\Database\Eloquent\Collection jobLayouts
 * @property \Illuminate\Database\Eloquent\Collection jobUpdateItems
 * @property \Illuminate\Database\Eloquent\Collection JobUpdate
 * @property \Illuminate\Database\Eloquent\Collection labSheets
 * @property \Illuminate\Database\Eloquent\Collection mailingLists
 * @property \Illuminate\Database\Eloquent\Collection nominalCodes
 * @property \Illuminate\Database\Eloquent\Collection notes
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection practices
 * @property \Illuminate\Database\Eloquent\Collection pricebands
 * @property \Illuminate\Database\Eloquent\Collection productOptions
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection remakeReasons
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection serviceReportIssues
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipientDescriptions
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipients
 * @property \Illuminate\Database\Eloquent\Collection ServiceReport
 * @property \Illuminate\Database\Eloquent\Collection statements
 * @property \Illuminate\Database\Eloquent\Collection stocks
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection vatRates
 * @property \Illuminate\Database\Eloquent\Collection visitDetails
 * @property integer dentist_id
 * @property integer department_id
 * @property string patient_name
 * @property string|\Carbon\Carbon date_in
 * @property string|\Carbon\Carbon date_due_out
 * @property string|\Carbon\Carbon date_dispatched
 * @property string special_instructions
 * @property string comments
 * @property string shade
 * @property integer impressions
 * @property integer models
 * @property boolean estimate
 * @property boolean bites
 * @property string others
 * @property boolean remake
 * @property boolean invoiced
 * @property integer remake_reason_id
 * @property string|\Carbon\Carbon remake_date
 * @property integer remake_original_ref
 * @property string job_no
 * @property string signed_for_by
 * @property string|\Carbon\Carbon delivery_date
 * @property integer job_layout_id
 * @property integer nominal_code_id
 * @property boolean price_fixed
 * @property integer lab_sheet_id
 * @property boolean input_error
 * @property integer job_error_ref
 * @property integer created_by
 * @property integer updated_by
 */
class Job extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'dentist_id',
        'department_id',
        'patient_name',
        'date_in',
        'date_due_out',
        'date_dispatched',
        'special_instructions',
        'shade',
        'impressions',
        'models',
        'estimate',
        'bites',
        'others',
        'remake',
        'invoiced',
        'remake_reason_id',
        'remake_date',
        'remake_original_ref',
        'job_no',
        'signed_for_by',
        'delivery_date',
        'job_layout_id',
        'nominal_code_id',
        'price_fixed',
        'lab_sheet_id',
        'input_error',
        'job_error_ref',
        'created_by',
        'updated_by',
        'comments'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dentist_id' => 'integer',
        'department_id' => 'integer',
        'patient_name' => 'string',
        'special_instructions' => 'string',
        'shade' => 'string',
        'impressions' => 'integer',
        'models' => 'integer',
        'estimate' => 'boolean',
        'bites' => 'boolean',
        'others' => 'string',
        'remake' => 'boolean',
        'invoiced' => 'boolean',
        'remake_reason_id' => 'integer',
        'remake_original_ref' => 'integer',
        'job_no' => 'string',
        'signed_for_by' => 'string',
        'job_layout_id' => 'integer',
        'nominal_code_id' => 'integer',
        'price_fixed' => 'boolean',
        'lab_sheet_id' => 'integer',
        'input_error' => 'boolean',
        'job_error_ref' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'comments' => 'string'
    ];

//    /**
//     * Validation rules
//     *
//     * @var array
//     */
//    public static $rules = [
//        'dentist_id' => 'required',
//        'department_id' => 'required',
//        'patient_name' => 'required',
//        'date_in' => 'required|date|date_format:d/m/Y',
//        'date_due_out' => 'required|date|date_format:d/m/Y',
//        'date_dispatched' => 'required|date|date_format:d/m/Y',
//        'special_instructions' => 'required',
//        'shade' => 'required',
//        'impressions' => 'integer|required',
//        'models' => 'integer|nullable',
//        'others' => 'required',
//        'remake_reason_id' => 'nullable',
//        'remake_date' => 'date|date_format:d/m/Y|nullable',
//        'remake_original_ref' => 'integer|nullable',
//        'job_no' => 'required',
//        'signed_for_by' => 'required',
//        'delivery_date' => 'date|date_format:d/m/Y|nullable',
//        'job_layout_id' => 'nullable',
//        'nominal_code_id' => 'required',
//        'lab_sheet_id' => 'nullable',
//        'job_error_ref' => 'integer|nullable',
//        'created_by' => 'integer|nullable',
//        'updated_by' => 'integer|nullable',
//        'comments' => 'nullable'
//    ];

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
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jobLayout()
    {
        return $this->belongsTo(JobLayout::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function labSheet()
    {
        return $this->belongsTo(LabSheet::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nominalCode()
    {
        return $this->belongsTo(NominalCode::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function remakeReason()
    {
        return $this->belongsTo(RemakeReason::class);
    }

////these relationships are breaking the job create method
//    public function remake(){
//        return $this->belongsTo(Job::class, 'remake_original_ref');
//    }
//
//    public function inputError(){
//        return $this->belongsTo(Job::class, 'job_error_ref');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function jobUpdates()
    {
        return $this->hasMany(JobUpdate::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function serviceReports()
    {
        return $this->hasMany(ServiceReport::class);
    }

    public function stocks(){
        return $this->hasMany(JobStock::class);
    }

    public function work(){
        return $this->hasOne(JobWork::class);
    }

}
