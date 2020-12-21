<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    protected $fillable = ['category_id','code','nameproduct','qty','price','description'];
}
