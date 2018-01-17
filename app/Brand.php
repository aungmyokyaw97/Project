<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
    	'brand_name','subcatg_id',
    ];

    public function subcatg(){
    	return $this->belongsTo('App\Category');
    }

}
