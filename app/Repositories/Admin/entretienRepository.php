<?php

namespace App\Repositories\Admin;

use App\Models\Admin\entretien;
use InfyOm\Generator\Common\BaseRepository;

class entretienRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'periode',
        'date',
        'lieu',
        'sujet',
        'id_clt',
        'id_entreprise'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return entretien::class;
    }
}
