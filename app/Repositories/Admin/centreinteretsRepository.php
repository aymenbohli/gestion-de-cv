<?php

namespace App\Repositories\Admin;

use App\Models\Admin\centreinterets;
use InfyOm\Generator\Common\BaseRepository;

class centreinteretsRepository extends BaseRepository
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
        return centreinterets::class;
    }
}
