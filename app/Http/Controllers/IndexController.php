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
        $products->load('user');
        return view('index', ['products' => $products]);
    }
}
