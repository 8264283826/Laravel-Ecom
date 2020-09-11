<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use ProductCategory;
class Product extends Model
{
    //
    protected $fillable = [
     'product_name','product_desc','price','slug','status',
     'category_id'
    ];
    public function category(){
    	return $this->belongsTo('App\ProductCategory');
    }
    public function productImage(){
    	return $this->hasMany('App\ProductImage');
    }
}
