<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Product;
class ProductImage extends Model
{
    //
   protected $fillable = [
   'product_id','image_title','image','slug','status'
   ];
  public function product(){
  	return $this->belongsTo('App\Product');
      
  }
}
