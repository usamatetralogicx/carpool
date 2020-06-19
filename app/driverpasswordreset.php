<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driverpasswordreset extends Model
{
     protected $fillable = [
        'user_id', 'email', 'token',
    ];
}
