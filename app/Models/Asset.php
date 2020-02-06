<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;

/**
 * Class Asset
 * @package App\Models
 * @version August 22, 2018, 4:45 pm BST
 *
 * @property \App\Models\AssetType assetType
 * @property \App\Models\User user
 * @property pmm
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection assetTypes
 * @property \Illuminate\Database\Eloquent\Collection Assetable
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection dentistStatuses
 * @property \Illuminate\Database\Eloquent\Collection discounts
 * @property \Illuminate\Database\Eloquent\Collection documents
 * @property \Illuminate\Database\Eloquent\Collection invoiceStatuses
 * @property \Illuminate\Database\Eloquent\Collection jobErrors
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
 * @property string title
 * @property string file_name
 * @property string storage_path
 * @property integer file_size
 * @property integer asset_type_id
 * @property integer created_by
 * @property integer updated_by
 */
class Asset extends Model
{
    use CreateAndUpdateTrait;

    public $table = 'assets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'title',
        'file_name',
        'storage_path',
        'file_size',
        'asset_type_id',
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
        'title' => 'string',
        'file_name' => 'string',
        'storage_path' => 'string',
        'file_size' => 'integer',
        'asset_type_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'file_name' => 'required',
        'storage_path' => 'required',
        'file_size' => 'integer|required',
        'asset_type_id' => 'required',
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function assetType()
    {
        return $this->belongsTo(AssetType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     **/
    public function assets()
    {
        return $this->morphMany(Asset::class, 'assetable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function assetables()
    {
        return $this->hasMany(Assetable::class);
    }
}
