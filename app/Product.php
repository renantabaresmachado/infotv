<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'value', 'paymentMethod' , 'imagem' , 'created' ,'market_place_id',
    ];
     public function marketPlace(){
        return $this->belongsTo('App\MarketPlace');
    }
    public function search(Array $data, $totalPage){
        return $this->where(function ($query) use ($data){
            if(isset($data['name'])){
            $query->where('name', $data['name']);
            }
            if(isset($data['value'])){
            $query->where('value', $data['value']);
            }
            if(isset($data['created_at'])){
            $query->where('created', $data['created_at'] );
            }
            if(isset($data['marketplace'])){
            $query->where('market_place_id', $data['marketplace']);
            }
            
        })//->toSql();dd($data['created_at']);
          ->paginate($totalPage);
    }
}
