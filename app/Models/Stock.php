<?php

namespace App\Models;

use App\Traits\CreateAndUpdateTrait;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StockPriceband
 * @package App\Models
 * @version August 21, 2018, 1:25 pm BST
 *
 * @property \App\Models\User user
 * @property \App\Models\Priceband priceband
 * @property \App\Models\Stock stock
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
 * @property integer priceband_id
 * @property float price
 * @property integer stock_id
 * @property string department
 * @property string stock_description
 * @property string idh_code
 * @property string nhs_code
 * @property boolean crown
 * @property boolean bridge
 * @property boolean inlay_onlay
 * @property boolean post_core
 * @property boolean ptm_non_precious
 * @property boolean ptm_argelite_54B
 * @property boolean ptm_argedent_EURO
 * @property boolean ptm_argedent_52
 * @property boolean ptm_argedent_75
 * @property boolean ptm_argedent_86
 * @property boolean ptm_captek
 * @property boolean fcc_non_precious
 * @property boolean fcc_non_precious_yellow
 * @property boolean fcc_argelite_54B
 * @property boolean fcc_argenco_Y
 * @property boolean fcc_argenco_20
 * @property boolean fcc_argenco_52
 * @property boolean fcc_argenco_75
 * @property boolean ac_e_max
 * @property boolean ac_venner
 * @property boolean ac_full_zirconia
 * @property boolean ac_zirconia
 * @property boolean ac_composite
 * @property boolean oth_temporary_crown
 * @property boolean oth_diagnostic_wax_up
 * @property integer created_by
 * @property integer updated_by
 */
class Stock extends Model
{
    use SoftDeletes, CreateAndUpdateTrait;

    public $table = 'stocks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'stock_code',
        'department',
        'stock_description',
        'idh_code',
        'nhs_code',
        'crown',
        'bridge',
        'inlay_onlay',
        'post_core',
        'ptm_non_precious',
        'ptm_argelite_54B',
        'ptm_argedent_EURO',
        'ptm_argedent_52',
        'ptm_argedent_75',
        'ptm_argedent_86',
        'ptm_captek',
        'fcc_non_precious',
        'fcc_non_precious_yellow',
        'fcc_argelite_54B',
        'fcc_argenco_Y',
        'fcc_argenco_20',
        'fcc_argenco_52',
        'fcc_argenco_75',
        'ac_e_max',
        'ac_venner',
        'ac_full_zirconia',
        'ac_zirconia',
        'ac_composite',
        'oth_temporary_crown',
        'oth_diagnostic_wax_up',
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
        'stock_code' => 'string',
        'department' => 'string',
        'stock_description' => 'string',
        'idh_code' => 'string',
        'nhs_code' => 'string',
        'crown' => 'boolean',
        'bridge' => 'boolean',
        'inlay_onlay' => 'boolean',
        'post_core' => 'boolean',
        'ptm_non_precious' => 'boolean',
        'ptm_argelite_54B' => 'boolean',
        'ptm_argedent_EURO' => 'boolean',
        'ptm_argedent_52' => 'boolean',
        'ptm_argedent_75' => 'boolean',
        'ptm_argedent_86' => 'boolean',
        'ptm_captek' => 'boolean',
        'fcc_non_precious' => 'boolean',
        'fcc_non_precious_yellow' => 'boolean',
        'fcc_argelite_54B' => 'boolean',
        'fcc_argenco_Y' => 'boolean',
        'fcc_argenco_20' => 'boolean',
        'fcc_argenco_52' => 'boolean',
        'fcc_argenco_75' => 'boolean',
        'ac_e_max' => 'boolean',
        'ac_venner' => 'boolean',
        'ac_full_zirconia' => 'boolean',
        'ac_zirconia' => 'boolean',
        'ac_composite' => 'boolean',
        'oth_temporary_crown' => 'boolean',
        'oth_diagnostic_wax_up' => 'boolean',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'stock_code' => 'required|unique',
        'stock_units' => 'nullable',
        'department' => 'required',
        'stock_description' => 'required',
        'idh_code' => 'nullable',
        'nhs_code' => 'nullable',
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

    public function stockPricebands(){
        return $this->hasMany(StockPriceband::class);
    }


}
