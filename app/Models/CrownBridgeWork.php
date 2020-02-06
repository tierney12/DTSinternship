<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CrownBridgeWork
 * @package App\Models
 * @version September 4, 2018, 3:08 pm BST
 *
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\User user
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
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
 * @property \Illuminate\Database\Eloquent\Collection JobWork
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
 * @property integer models_tech
 * @property integer models_units
 * @property integer trim_die_tech
 * @property integer trim_die_units
 * @property integer articulate_tech
 * @property integer articulate_units
 * @property integer scan_tech
 * @property integer scan_units
 * @property integer gold_work_tech
 * @property integer gold_work_units
 * @property integer foil_and_core_tech
 * @property integer foil_and_core_units
 * @property integer opaque_tech
 * @property integer opaque_units
 * @property integer build_up_tech
 * @property integer build_up_units
 * @property integer stone/grind_in_tech
 * @property integer stone/grind_in_units
 * @property integer glaze_tech
 * @property integer glaze_units
 * @property integer fit_tech
 * @property integer fit_units
 * @property integer other_tech
 * @property integer other_units
 * @property integer created_by
 * @property integer updated_by
 */
class CrownBridgeWork extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'crown_bridge_work';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'models_tech',
        'models_units',
        'trim_die_tech',
        'trim_die_units',
        'articulate_tech',
        'articulate_units',
        'scan_tech',
        'scan_units',
        'gold_work_tech',
        'gold_work_units',
        'foil_and_core_tech',
        'foil_and_core_units',
        'opaque_tech',
        'opaque_units',
        'build_up_tech',
        'build_up_units',
        'stone/grind_in_tech',
        'stone/grind_in_units',
        'glaze_tech',
        'glaze_units',
        'fit_tech',
        'fit_units',
        'other_tech',
        'other_units',
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
        'models_tech' => 'integer',
        'models_units' => 'integer',
        'trim_die_tech' => 'integer',
        'trim_die_units' => 'integer',
        'articulate_tech' => 'integer',
        'articulate_units' => 'integer',
        'scan_tech' => 'integer',
        'scan_units' => 'integer',
        'gold_work_tech' => 'integer',
        'gold_work_units' => 'integer',
        'foil_and_core_tech' => 'integer',
        'foil_and_core_units' => 'integer',
        'opaque_tech' => 'integer',
        'opaque_units' => 'integer',
        'build_up_tech' => 'integer',
        'build_up_units' => 'integer',
        'stone/grind_in_tech' => 'integer',
        'stone/grind_in_units' => 'integer',
        'glaze_tech' => 'integer',
        'glaze_units' => 'integer',
        'fit_tech' => 'integer',
        'fit_units' => 'integer',
        'other_tech' => 'integer',
        'other_units' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'models_tech' => 'integer|nullable',
        'models_units' => 'integer|nullable',
        'trim_die_tech' => 'integer|nullable',
        'trim_die_units' => 'integer|nullable',
        'articulate_tech' => 'integer|nullable',
        'articulate_units' => 'integer|nullable',
        'scan_tech' => 'integer|nullable',
        'scan_units' => 'integer|nullable',
        'gold_work_tech' => 'integer|nullable',
        'gold_work_units' => 'integer|nullable',
        'foil_and_core_tech' => 'integer|nullable',
        'foil_and_core_units' => 'integer|nullable',
        'opaque_tech' => 'integer|nullable',
        'opaque_units' => 'integer|nullable',
        'build_up_tech' => 'integer|nullable',
        'build_up_units' => 'integer|nullable',
        'stone/grind_in_tech' => 'integer|nullable',
        'stone/grind_in_units' => 'integer|nullable',
        'glaze_tech' => 'integer|nullable',
        'glaze_units' => 'integer|nullable',
        'fit_tech' => 'integer|nullable',
        'fit_units' => 'integer|nullable',
        'other_tech' => 'integer|nullable',
        'other_units' => 'integer|nullable',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function jobWorks()
    {
        return $this->hasMany(JobWork::class);
    }
}
