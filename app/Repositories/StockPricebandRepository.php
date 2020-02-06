<?php

namespace App\Repositories;

use App\Models\StockPriceband;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StockPricebandRepository
 * @package App\Repositories
 * @version September 12, 2018, 10:20 am BST
 *
 * @method StockPriceband findWithoutFail($id, $columns = ['*'])
 * @method StockPriceband find($id, $columns = ['*'])
 * @method StockPriceband first($columns = ['*'])
*/
class StockPricebandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stock_id',
        'priceband_id',
        'price',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StockPriceband::class;
    }
}
