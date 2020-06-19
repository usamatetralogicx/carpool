<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driververifytoken extends Model
{
      protected $fillable = [
        'user_id', 'email', 'token',
    ];
}
