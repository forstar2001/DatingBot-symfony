<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Validator;

class RoleAction extends Eloquent
{
    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'string'
    ];

}
