<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name','maincatg_id','subcatg_id','brand_id','file'
    ];
}
