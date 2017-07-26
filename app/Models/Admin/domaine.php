<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class domaine
 * @package App\Models\Admin
 * @version May 14, 2017, 10:03 pm UTC
 */
class domaine extends Model
{
    use SoftDeletes;

    public $table = 'domaines';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'type' => 'required'
    ];

    
}
