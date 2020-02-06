<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Dentist
 * @package App\Models
 * @version August 21, 2018, 12:41 pm BST
 *
 * @property \App\Models\Address address
 * @property \App\Models\Area area
 * @property \App\Models\User user
 * @property \App\Models\DentistStatus dentistStatus
 * @property \App\Models\Practice practice
 * @property \App\Models\Priceband priceband
 * @property \Illuminate\Database\Eloquent\Collection Activity
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection CourseDentist
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection DentistMailingList
 * @property \Illuminate\Database\Eloquent\Collection DentistSpend
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection Estimate
 * @property \Illuminate\Database\Eloquent\Collection InfoSentToDentist
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatus
 * @property \Illuminate\Database\Eloquent\Collection jobErrors
 * @property \Illuminate\Database\Eloquent\Collection Job
 * @property \Illuminate\Database\Eloquent\Collection jobLayouts
 * @property \Illuminate\Database\Eloquent\Collection jobUpdateItems
 * @property \Illuminate\Database\Eloquent\Collection labSheets
 * @property \Illuminate\Database\Eloquent\Collection mailingLists
 * @property \Illuminate\Database\Eloquent\Collection nominalCodes
 * @property \Illuminate\Database\Eloquent\Collection noteTypes
 * @property \Illuminate\Database\Eloquent\Collection notes
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection Popup
 * @property \Illuminate\Database\Eloquent\Collection practices
 * @property \Illuminate\Database\Eloquent\Collection pricebands
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection productOptions
 * @property \Illuminate\Database\Eloquent\Collection remakeReasons
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection ServiceReport
 * @property \Illuminate\Database\Eloquent\Collection serviceReportIssues
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipients
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipientsDescriptions
 * @property \Illuminate\Database\Eloquent\Collection statements
 * @property \Illuminate\Database\Eloquent\Collection stocks
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection vatRates
 * @property \Illuminate\Database\Eloquent\Collection Visit
 * @property \Illuminate\Database\Eloquent\Collection visitDetails
 * @property string account_number
 * @property string|\Carbon\Carbon customer_since
 * @property boolean active
 * @property boolean mailing_list_opt_in
 * @property string title
 * @property string firstname
 * @property string surname
 * @property string phone_number
 * @property string mobile_number
 * @property boolean vocational_training
 * @property boolean essential_account
 * @property string preferences
 * @property integer recall_month
 * @property string email
 * @property string gdc_number
 * @property integer practice_id
 * @property integer address_id
 * @property integer area_id
 * @property integer dentist_status_id
 * @property integer priceband_id
 * @property integer created_by
 * @property integer updated_by
 */
class Dentist extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'dentists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'exception',
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
        'account_number' => 'string',
        'active' => 'boolean',
        'mailing_list_opt_in' => 'boolean',
        'title' => 'string',
        'firstname' => 'string',
        'surname' => 'string',
        'phone_number' => 'string',
        'mobile_number' => 'string',
        'vocational_training' => 'boolean',
        'essential_account' => 'boolean',
        'preferences' => 'string',
        'recall_month' => 'integer',
        'email' => 'string',
        'gdc_number' => 'string',
        'practice_id' => 'integer',
        'exception' => 'integer',
        'address_id' => 'integer',
        'area_id' => 'integer',
        'dentist_status_id' => 'integer',
        'priceband_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'account_number' => 'required',
        'customer_since' => 'required|date|date_format:d/m/Y',
        'title' => 'required',
        'firstname' => 'required',
        'surname' => 'required',
        'phone_number' => 'required',
        'mobile_number' => 'required',
        'preferences' => 'nullable',
        'recall_month' => 'integer|required',
        'email' => 'required',
        'gdc_number' => 'required',
        'practice_id' => 'required',
        'address_id' => 'required',
        'area_id' => 'required',
        'dentist_status_id' => 'required',
        'priceband_id' => 'required',
        'exception' => 'nullable',
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function area()
    {
        return $this->belongsTo(Area::class);
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
    public function dentistStatus()
    {
        return $this->belongsTo(dentistStatus::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function practice()
    {
        return $this->belongsTo(Practice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function priceband()
    {
        return $this->belongsTo(Priceband::class);
    }

//    public function exception(){
//        return $this->belongsTo(Priceband::class, 'exception');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function courseDentists()
    {
        return $this->hasMany(CourseDentist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dentistMailingLists()
    {
        return $this->hasMany(DentistMailingList::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dentistsSpends()
    {
        return $this->hasMany(DentistSpend::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function estimates()
    {
        return $this->hasMany(Estimate::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function infoSentToDentists()
    {
        return $this->hasMany(InfoSentToDentist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function popups()
    {
        return $this->hasMany(Popup::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function serviceReports()
    {
        return $this->hasMany(ServiceReport::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/



    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function documents(){
        return $this->morphToMany(Document::class, 'documentable');
    }

    public function notes(){
        return $this->morthToMany(Note::class, 'noteable');
    }
}
