<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{

    protected $fillable =[
        'name','country_id'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id', 'id');
    }

 
}
