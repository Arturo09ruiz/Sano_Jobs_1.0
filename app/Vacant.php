<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    protected $fillable = [
        'name', 'description', 'requirements', 'business', 'email', 'telefono', 'deadline', 'status', 'user_id', 'country_id', 'conuncil_id', 'city_id', 'team_id', 'category_id'
    ];

}
