<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models\Admin
 * @version May 15, 2017, 8:09 pm UTC
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'cin',
        'datenais',
        'adresse',
        'non_entreprise',
        'numtel',
        'domaine',
        'role'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'photo' => 'string',
        'cin' => 'string',
        'datenais' => 'string',
        'adresse' => 'string',
        'non_entreprise' => 'string',
        'numtel' => 'string',
        'domaine' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    
}
