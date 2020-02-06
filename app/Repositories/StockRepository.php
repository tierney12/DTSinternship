<?php

namespace App\Repositories;

use App\Models\Stock;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StockPricebandRepository
 * @package App\Repositories
 * @version August 21, 2018, 1:25 pm BST
 *
 * @method Stock findWithoutFail($id, $columns = ['*'])
 * @method Stock find($id, $columns = ['*'])
 * @method Stock first($columns = ['*'])
 */
class StockRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stock_code',
        'stock_units',
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
     * Configure the Model
     **/
    public function model()
    {
        return Stock::class;
    }
}
