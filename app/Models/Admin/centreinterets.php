<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class centreinterets
 * @package App\Models\Admin
 * @version May 14, 2017, 10:20 pm UTC
 */
class centreinterets extends Model
{
    use SoftDeletes;

    public $table = 'centreinterets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type',
        'id_clt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'id_clt' =>  'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
