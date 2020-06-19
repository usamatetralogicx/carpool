<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
     protected $fillable = [
        'Country','Number_plate','Company','Model','type_car','Color','Year_of_registered'
    ];
}
