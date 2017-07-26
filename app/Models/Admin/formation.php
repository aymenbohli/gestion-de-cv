<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class formation
 * @package App\Models\Admin
 * @version May 14, 2017, 10:25 pm UTC
 */
class formation extends Model
{
    use SoftDeletes;

    public $table = 'formations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'periode',
        'governorat',
        'id_clt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'periode' => 'string',
        'governorat' => 'string',
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
