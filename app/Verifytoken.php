<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifytoken extends Model
{
     protected $fillable = [
        'user_id', 'email', 'token',
    ];
}
