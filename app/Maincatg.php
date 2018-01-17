<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maincatg extends Model
{
     protected $fillable=[
    	'name'
    ];

    public function category(){
    	return $this->hasMany('App\Category');
    }
}
