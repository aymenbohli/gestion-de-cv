<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class offretravail
 * @package App\Models\Admin
 * @version May 14, 2017, 10:29 pm UTC
 */
class offretravail extends Model
{
    use SoftDeletes;

    public $table = 'offretravails';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'type',
        'numposte',
        'descreption',
        'id_entreprise'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'type' => 'string',
        'numposte' => 'string',
        'descreption' => 'string',
        'id_entreprise' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
