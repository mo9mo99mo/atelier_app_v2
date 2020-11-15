<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    //
    public function index()
    {
        $products = Product::latest()->get();
        // dd($products);
        // トップページにユーザーと工程情報も表示させる
        // $products->load('user');//relation
        $products->load('posts');//relation
        // $posts_data = Product::find(3)->posts()->first();
        // dd($products);
        return view('index', ['products' => $products]);
    }
}
