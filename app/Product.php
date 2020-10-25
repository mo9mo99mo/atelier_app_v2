<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_user_id'
    ];

    //relation 1対1
    public function user()
    {
        return $this->belongsTo('App\User', 'product_user_id', 'id');
    }
    //relation 1対多
    public function posts()
    {
        return $this->hasMany('App\Post', 'posts_products_id', 'id');
    }
}
