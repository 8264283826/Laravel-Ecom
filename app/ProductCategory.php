<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    protected $fillable = [
     'brand_name','status','slug'
    ];
    public function products(){
    	return $this->hasMany('App/product');
    }
    
}
