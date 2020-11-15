<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_user_id',
        'posts_products_id'
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
        // 追加の引数として、外部キー(foreign_key)とローカルキー(local_key)をhasManyメソッドに渡さないとエラーになる。
        // return $this->hasMany('App\Post');
    }
}
