<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class member
 * @package App\Models\Admin
 * @version March 23, 2017, 8:29 am UTC
 */
class role_users extends Model
{
    use SoftDeletes;

    public $table = 'role_users';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'role_id',
        'user_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role_id' => 'integer',
        'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    
}
