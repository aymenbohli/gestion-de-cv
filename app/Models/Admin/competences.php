<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class competences
 * @package App\Models\Admin
 * @version May 14, 2017, 10:13 pm UTC
 */
class competences extends Model
{
    use SoftDeletes;

    public $table = 'competences';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'descreption',
        'id_clt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'descreption' => 'string',
        'id_clt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'id_clt' => 'required'
    ];

    
}
