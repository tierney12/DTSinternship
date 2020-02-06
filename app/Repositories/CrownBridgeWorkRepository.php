<?php

namespace App\Repositories;

use App\Models\CrownBridgeWork;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CrownBridgeWorkRepository
 * @package App\Repositories
 * @version September 4, 2018, 3:08 pm BST
 *
 * @method CrownBridgeWork findWithoutFail($id, $columns = ['*'])
 * @method CrownBridgeWork find($id, $columns = ['*'])
 * @method CrownBridgeWork first($columns = ['*'])
*/
class CrownBridgeWorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return CrownBridgeWork::class;
    }
}
