<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $fillable = [
        'name',
        'status'
    ];

    protected $casts = [
        'name' => 'string',
        'status' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required',
        'status' => 'boolean,nullable'
    ];

    
}
