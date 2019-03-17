<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketPlace extends Model
{
    protected $fillable = [
        'name', 'description', 'site', 'cnpjCpf' ,
    ];
    
    public function users(){
        return $this->hasMany('App\User');
    }
    public function products(){
        return $this->hasMany('App\Product');
    }
}
