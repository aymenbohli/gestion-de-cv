<?php

namespace App\Repositories\Admin;

use App\Models\Admin\competences;
use InfyOm\Generator\Common\BaseRepository;

class competencesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'descreption',
        'id_clt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return competences::class;
    }
}
