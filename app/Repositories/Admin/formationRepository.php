<?php

namespace App\Repositories\Admin;

use App\Models\Admin\formation;
use InfyOm\Generator\Common\BaseRepository;

class formationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'periode',
        'governorat',
        'id_clt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return formation::class;
    }
}
