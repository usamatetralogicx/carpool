<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy_car extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
