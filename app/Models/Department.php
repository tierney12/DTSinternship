<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Department
 * @package App\Models
 * @version September 4, 2018, 3:14 pm BST
 *
 * @property \App\Models\Checklist checklist
 * @property \App\Models\User user
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection assetTypes
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection errors
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatuses
 * @property \Illuminate\Database\Eloquent\Collection jobLayouts
 * @property \Illuminate\Database\Eloquent\Collection jobUpdateItems
 * @property \Illuminate\Database\Eloquent\Collection Job
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
 * @property \Illuminate\Database\Eloquent\Collection statements
 * @property \Illuminate\Database\Eloquent\Collection stocks
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection vatRates
 * @property \Illuminate\Database\Eloquent\Collection visitDetails
 * @property string name
 * @property integer checklist_id
 * @property boolean crown_bridge_work
 * @property boolean pros_work
 * @property integer created_by
 * @property integer updated_by
 */
class Department extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'departments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'checklist_id',
        'crown_bridge_work',
        'pros_work',
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
        'name' => 'string',
        'checklist_id' => 'integer',
        'crown_bridge_work' => 'boolean',
        'pros_work' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'checklist_id' => 'required',
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function checklist()
    {
        return $this->belongsTo(Checklist::class);
    }

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
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
