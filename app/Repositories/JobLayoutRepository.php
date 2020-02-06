<?php

namespace App\Repositories;

use App\Models\JobLayout;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JobLayoutRepository
 * @package App\Repositories
 * @version August 21, 2018, 12:40 pm BST
 *
 * @method JobLayout findWithoutFail($id, $columns = ['*'])
 * @method JobLayout find($id, $columns = ['*'])
 * @method JobLayout first($columns = ['*'])
*/
class JobLayoutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'layout11',
        'layout12',
        'layout13',
        'layout14',
        'layout15',
        'layout16',
        'layout17',
        'layout18',
        'layout21',
        'layout22',
        'layout23',
        'layout24',
        'layout25',
        'layout26',
        'layout27',
        'layout28',
        'layout31',
        'layout32',
        'layout33',
        'layout34',
        'layout35',
        'layout36',
        'layout37',
        'layout38',
        'layout41',
        'layout42',
        'layout43',
        'layout44',
        'layout45',
        'layout46',
        'layout47',
        'layout48',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return JobLayout::class;
    }
}
