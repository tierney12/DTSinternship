<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Checklist
 * @package App\Models
 * @version September 4, 2018, 3:27 pm BST
 *
 * @property \App\Models\User user
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection assetTypes
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection Department
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection errors
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatuses
 * @property \Illuminate\Database\Eloquent\Collection jobLayouts
 * @property \Illuminate\Database\Eloquent\Collection jobUpdateItems
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
 * @property string item1
 * @property string item2
 * @property string item3
 * @property string item4
 * @property string item5
 * @property string item6
 * @property string item7
 * @property string item8
 * @property string item9
 * @property string item10
 * @property string item11
 * @property string item12
 * @property string item13
 * @property string item14
 * @property string item15
 * @property string item16
 * @property string item17
 * @property string item18
 * @property string item19
 * @property string item20
 * @property integer created_by
 * @property integer updated_by
 */
class Checklist extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'checklists';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'item6',
        'item7',
        'item8',
        'item9',
        'item10',
        'item11',
        'item12',
        'item13',
        'item14',
        'item15',
        'item16',
        'item17',
        'item18',
        'item19',
        'item20',
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
        'item1' => 'string',
        'item2' => 'string',
        'item3' => 'string',
        'item4' => 'string',
        'item5' => 'string',
        'item6' => 'string',
        'item7' => 'string',
        'item8' => 'string',
        'item9' => 'string',
        'item10' => 'string',
        'item11' => 'string',
        'item12' => 'string',
        'item13' => 'string',
        'item14' => 'string',
        'item15' => 'string',
        'item16' => 'string',
        'item17' => 'string',
        'item18' => 'string',
        'item19' => 'string',
        'item20' => 'string',
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
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
