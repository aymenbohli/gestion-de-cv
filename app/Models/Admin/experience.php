<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class experience
 * @package App\Models\Admin
 * @version May 14, 2017, 10:23 pm UTC
 */
class experience extends Model
{
    use SoftDeletes;

    public $table = 'experiences';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'duree',
        'entreprise',
        'governorat',
        'type',
        'descreption',
        'id_clt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'duree' => 'string',
        'entreprise' => 'string',
        'governorat' => 'string',
        'type' => 'string',
        'descreption' => 'string',
        'id_clt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
