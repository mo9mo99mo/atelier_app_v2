<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// 以下追加
use Validator;
use App\Product;
use App\Post;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // dd($products);
        //$user = Auth::user();   #ログインユーザー情報を取得
        return view('pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //データ追加画面へ移動する処理
    public function create()
    {
        //$user = Auth::user();   #ログインユーザー情報を取得
        return view('pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //dbへデータを追加する処理
    public function store(Request $request)
    {
        // dd($request->all());
        //$product_name = $request->input('$product_name');
        //変更2
        $user = $request->user(); //ログインユーザー情報取得
        //dd($user);
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_user_id = $user->id;
        $product->product_pub_flg = 0;
        $product->product_del_flg = 1;
        $product->save();
        //dd($product);

        // return redirect(route('index'));
        return view('pages.posts.create', compact('user','product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // データを取得する処理
    public function show($id)
    {
        // dd($id);
        $product = Product::find($id);
        // posts table取得 主→従
        // $post = $product->posts;
        // $post = Product::find($id)->posts;
        // $post = Post::find(2)->products;
        // $posts_data = Product::find($id)->posts;
        // dd($post);
        return view('pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //データ編集ページを表示する処理
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dbのデータを更新する処理 
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //データを削除する処理
    // public function destroy($id)
    // {
    //     //
    // }
}
