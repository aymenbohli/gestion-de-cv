<?php

namespace App\Repositories\Admin;

use App\Models\Admin\domaine;
use InfyOm\Generator\Common\BaseRepository;

class domaineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return domaine::class;
    }
}
