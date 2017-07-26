<?php

namespace App\Repositories\Admin;

use App\Models\Admin\users;
use InfyOm\Generator\Common\BaseRepository;

class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'photo',
        'cin',
        'datenais',
        'adresse',
        'non_entreprise',
        'numtel',
        'domaine'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}
