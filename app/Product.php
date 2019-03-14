<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'value', 'paymentMethod' , 'imagem' , 'market_place_id',
    ];
     public function productable(){
        return $this->morphTo();
    }
}
