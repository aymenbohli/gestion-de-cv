<?php

namespace App\Repositories\Admin;

use App\Models\Admin\offretravail;
use InfyOm\Generator\Common\BaseRepository;

class offretravailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'type',
        'numposte',
        'descreption',
        'id_entreprise'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return offretravail::class;
    }
}
