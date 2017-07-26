<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class entretien
 * @package App\Models\Admin
 * @version May 14, 2017, 10:32 pm UTC
 */
class entretien extends Model
{
    use SoftDeletes;

    public $table = 'entretiens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'periode',
        'date',
        'lieu',
        'sujet',
        'id_clt',
        'id_entreprise'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'periode' => 'string',
        'date' => 'string',
        'lieu' => 'string',
        'sujet' => 'string',
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
