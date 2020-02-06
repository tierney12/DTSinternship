<?php

namespace App\Repositories;

use App\Models\ProsWork;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProsWorkRepository
 * @package App\Repositories
 * @version September 4, 2018, 3:09 pm BST
 *
 * @method ProsWork findWithoutFail($id, $columns = ['*'])
 * @method ProsWork find($id, $columns = ['*'])
 * @method ProsWork first($columns = ['*'])
*/
class ProsWorkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return ProsWork::class;
    }
}
