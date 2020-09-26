<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
     'total',
     'payment_type',
     'status',
     // 'total',
     'customer_id'
    ];
    public function customerDetail(){
    	return $this->belongsTo('App\CustomerDetail');
    }
}
