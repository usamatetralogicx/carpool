<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fillable = [
        'username', 'email', 'Phone', 'date_of_birth', 'password','verifyToken',
    ];
}
