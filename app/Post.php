<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //relation 1対1
    public function products()
    {
        return $this->belongsTo('App\Product', 'posts_products_id', 'id');
    }
}
