<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProsWork
 * @package App\Models
 * @version September 4, 2018, 3:09 pm BST
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
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
 * @property \App\Models\User user
 * @property \App\Models\Staff staff
 * @property \App\Models\Staff staff
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
 * @property integer cast_models_tech
 * @property integer cast_models_units
 * @property integer special_tray_tech
 * @property integer special_tray_units
 * @property integer duplicate_tech
 * @property integer duplicate_units
 * @property integer record_block_tech
 * @property integer record_block_units
 * @property integer replica_block_tech
 * @property integer replica_block_units
 * @property integer articulate_tech
 * @property integer articulate_units
 * @property integer design_tech
 * @property integer design_units
 * @property integer wax_up_tech
 * @property integer wax_up_units
 * @property integer trial_tech
 * @property integer trial_units
 * @property integer re_trail_tech
 * @property integer re_trail_units
 * @property integer reset_finish_tech
 * @property integer reset_finish_units
 * @property integer wax_finish_tech
 * @property integer wax_finish_units
 * @property integer flask_tech
 * @property integer flask_units
 * @property integer deflask_tech
 * @property integer deflask_units
 * @property integer trim_tech
 * @property integer trim_units
 * @property integer polish_tech
 * @property integer polish_units
 * @property integer repair_tech
 * @property integer repair_units
 * @property integer other_tech
 * @property integer other_units
 * @property integer created_by
 * @property integer updated_by
 */
class ProsWork extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'pros_work';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'cast_models_tech',
        'cast_models_units',
        'special_tray_tech',
        'special_tray_units',
        'duplicate_tech',
        'duplicate_units',
        'record_block_tech',
        'record_block_units',
        'replica_block_tech',
        'replica_block_units',
        'articulate_tech',
        'articulate_units',
        'design_tech',
        'design_units',
        'wax_up_tech',
        'wax_up_units',
        'trial_tech',
        'trial_units',
        're_trail_tech',
        're_trail_units',
        'reset_finish_tech',
        'reset_finish_units',
        'wax_finish_tech',
        'wax_finish_units',
        'flask_tech',
        'flask_units',
        'deflask_tech',
        'deflask_units',
        'trim_tech',
        'trim_units',
        'polish_tech',
        'polish_units',
        'repair_tech',
        'repair_units',
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
        'cast_models_tech' => 'integer',
        'cast_models_units' => 'integer',
        'special_tray_tech' => 'integer',
        'special_tray_units' => 'integer',
        'duplicate_tech' => 'integer',
        'duplicate_units' => 'integer',
        'record_block_tech' => 'integer',
        'record_block_units' => 'integer',
        'replica_block_tech' => 'integer',
        'replica_block_units' => 'integer',
        'articulate_tech' => 'integer',
        'articulate_units' => 'integer',
        'design_tech' => 'integer',
        'design_units' => 'integer',
        'wax_up_tech' => 'integer',
        'wax_up_units' => 'integer',
        'trial_tech' => 'integer',
        'trial_units' => 'integer',
        're_trail_tech' => 'integer',
        're_trail_units' => 'integer',
        'reset_finish_tech' => 'integer',
        'reset_finish_units' => 'integer',
        'wax_finish_tech' => 'integer',
        'wax_finish_units' => 'integer',
        'flask_tech' => 'integer',
        'flask_units' => 'integer',
        'deflask_tech' => 'integer',
        'deflask_units' => 'integer',
        'trim_tech' => 'integer',
        'trim_units' => 'integer',
        'polish_tech' => 'integer',
        'polish_units' => 'integer',
        'repair_tech' => 'integer',
        'repair_units' => 'integer',
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
        'cast_models_tech' => 'integer|nullable',
        'cast_models_units' => 'integer|nullable',
        'special_tray_tech' => 'integer|nullable',
        'special_tray_units' => 'integer|nullable',
        'duplicate_tech' => 'integer|nullable',
        'duplicate_units' => 'integer|nullable',
        'record_block_tech' => 'integer|nullable',
        'record_block_units' => 'integer|nullable',
        'replica_block_tech' => 'integer|nullable',
        'replica_block_units' => 'integer|nullable',
        'articulate_tech' => 'integer|nullable',
        'articulate_units' => 'integer|nullable',
        'design_tech' => 'integer|nullable',
        'design_units' => 'integer|nullable',
        'wax_up_tech' => 'integer|nullable',
        'wax_up_units' => 'integer|nullable',
        'trial_tech' => 'integer|nullable',
        'trial_units' => 'integer|nullable',
        're_trail_tech' => 'integer|nullable',
        're_trail_units' => 'integer|nullable',
        'reset_finish_tech' => 'integer|nullable',
        'reset_finish_units' => 'integer|nullable',
        'wax_finish_tech' => 'integer|nullable',
        'wax_finish_units' => 'integer|nullable',
        'flask_tech' => 'integer|nullable',
        'flask_units' => 'integer|nullable',
        'deflask_tech' => 'integer|nullable',
        'deflask_units' => 'integer|nullable',
        'trim_tech' => 'integer|nullable',
        'trim_units' => 'integer|nullable',
        'polish_tech' => 'integer|nullable',
        'polish_units' => 'integer|nullable',
        'repair_tech' => 'integer|nullable',
        'repair_units' => 'integer|nullable',
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
