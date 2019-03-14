<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketPlace extends Model
{
    protected $fillable = [
        'name', 'description', 'site', 'cnpjCpf' ,
    ];
    public function products(){
        return $this->morphMany('App\Product', 'productable');
    }
    public function users(){
        return $this->morphMany('App\User', 'userable');
    }
}
