<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobLayout
 * @package App\Models
 * @version August 21, 2018, 12:40 pm BST
 *
 * @property \App\Models\User user
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection Estimate
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatus
 * @property \Illuminate\Database\Eloquent\Collection jobErrors
 * @property \Illuminate\Database\Eloquent\Collection Job
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
 * @property boolean layout11
 * @property boolean layout12
 * @property boolean layout13
 * @property boolean layout14
 * @property boolean layout15
 * @property boolean layout16
 * @property boolean layout17
 * @property boolean layout18
 * @property boolean layout21
 * @property boolean layout22
 * @property boolean layout23
 * @property boolean layout24
 * @property boolean layout25
 * @property boolean layout26
 * @property boolean layout27
 * @property boolean layout28
 * @property boolean layout31
 * @property boolean layout32
 * @property boolean layout33
 * @property boolean layout34
 * @property boolean layout35
 * @property boolean layout36
 * @property boolean layout37
 * @property boolean layout38
 * @property boolean layout41
 * @property boolean layout42
 * @property boolean layout43
 * @property boolean layout44
 * @property boolean layout45
 * @property boolean layout46
 * @property boolean layout47
 * @property boolean layout48
 * @property integer created_by
 * @property integer updated_by
 */
class JobLayout extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'job_layouts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'layout11',
        'layout12',
        'layout13',
        'layout14',
        'layout15',
        'layout16',
        'layout17',
        'layout18',
        'layout21',
        'layout22',
        'layout23',
        'layout24',
        'layout25',
        'layout26',
        'layout27',
        'layout28',
        'layout31',
        'layout32',
        'layout33',
        'layout34',
        'layout35',
        'layout36',
        'layout37',
        'layout38',
        'layout41',
        'layout42',
        'layout43',
        'layout44',
        'layout45',
        'layout46',
        'layout47',
        'layout48',
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
        'layout11' => 'boolean',
        'layout12' => 'boolean',
        'layout13' => 'boolean',
        'layout14' => 'boolean',
        'layout15' => 'boolean',
        'layout16' => 'boolean',
        'layout17' => 'boolean',
        'layout18' => 'boolean',
        'layout21' => 'boolean',
        'layout22' => 'boolean',
        'layout23' => 'boolean',
        'layout24' => 'boolean',
        'layout25' => 'boolean',
        'layout26' => 'boolean',
        'layout27' => 'boolean',
        'layout28' => 'boolean',
        'layout31' => 'boolean',
        'layout32' => 'boolean',
        'layout33' => 'boolean',
        'layout34' => 'boolean',
        'layout35' => 'boolean',
        'layout36' => 'boolean',
        'layout37' => 'boolean',
        'layout38' => 'boolean',
        'layout41' => 'boolean',
        'layout42' => 'boolean',
        'layout43' => 'boolean',
        'layout44' => 'boolean',
        'layout45' => 'boolean',
        'layout46' => 'boolean',
        'layout47' => 'boolean',
        'layout48' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
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
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
