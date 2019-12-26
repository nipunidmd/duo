<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOffer extends Model
{
    // Percentage = 1
    // Value = 2
    use SoftDeletes;
    protected $table = 'product_offers';
    protected $guarded = ['id'];

    public function products(){
      return $this->belongsTo('App\Product','product_id' ,'id');
  	}

    public function offers(){
        return $this->belongsTo('App\Offer','offer_id','id');
    }
}
