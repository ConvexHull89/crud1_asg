<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->hasMany('App\Category');
    }
    protected $fillable = ['code','nameproduct','qty','price','description'];
}
