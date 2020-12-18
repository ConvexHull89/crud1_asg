<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['product_id','category_product'];
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
