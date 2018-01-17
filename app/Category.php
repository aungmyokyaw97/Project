<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=[
    	'name','maincatg_id'
    ];

    public function maincatg(){
    	return $this->belongsTo('App\Maincatg');
    }

}
