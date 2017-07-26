<?php

namespace App\Repositories\Admin;

use App\Models\Admin\experience;
use InfyOm\Generator\Common\BaseRepository;

class experienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'duree',
        'entreprise',
        'governorat',
        'type',
        'descreption',
        'id_clt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return experience::class;
    }
}
