<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
     protected $fillable = [
        'name',
        'last_name',
        'email', 
        'phone',
        'bussiness_type'
    ];
}
