<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Priceband
 * @package App\Models
 * @version August 21, 2018, 1:25 pm BST
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection addresses
 * @property \Illuminate\Database\Eloquent\Collection areas
 * @property \Illuminate\Database\Eloquent\Collection checklists
 * @property \Illuminate\Database\Eloquent\Collection courses
 * @property \Illuminate\Database\Eloquent\Collection Dentist
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
 * @property \Illuminate\Database\Eloquent\Collection PricebandsProduct
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property \Illuminate\Database\Eloquent\Collection productOptions
 * @property \Illuminate\Database\Eloquent\Collection remakeReasons
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection serviceReportIssues
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipients
 * @property \Illuminate\Database\Eloquent\Collection serviceReportRecipientsDescriptions
 * @property \Illuminate\Database\Eloquent\Collection statements
 * @property \Illuminate\Database\Eloquent\Collection stocks
 * @property \Illuminate\Database\Eloquent\Collection StocksPriceband
 * @property \Illuminate\Database\Eloquent\Collection transactions
 * @property \Illuminate\Database\Eloquent\Collection vatRates
 * @property \Illuminate\Database\Eloquent\Collection visitDetails
 * @property string name
 * @property integer created_by
 * @property integer updated_by
 */
class Priceband extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'pricebands';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'created_by',
        'updated_by',
        'exception'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'exception' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'created_by' => 'integer|nullable',
        'updated_by' => 'integer|nullable',
        'exception' => 'integer|required'
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
    public function dentists()
    {
        return $this->hasMany(Dentist::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pricebandsProducts()
    {
        return $this->hasMany(PricebandsProduct::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockPricebands()
    {
        return $this->hasMany(StockPriceband::class);
    }
}
