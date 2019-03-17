<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'value', 'paymentMethod' , 'imagem' , 'market_place_id',
    ];
     public function marketPlace(){
        return $this->belongsTo('App\MarketPlace');
    }
}
