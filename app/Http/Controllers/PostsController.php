<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$posts = Post::all();
        $posts = Post::latest()->get();
        // dd($posts);
        return view('pages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->posts_produsts_id);
        
        
        
        if ($request->file('posts_img_path')->isValid()) { //アップロード成功したか確認
            //アップロードするファイル名を取得
            $fileName = $request->file('posts_img_path')->getClientOriginalName();
            //ファイルをアップロード
            $request->file('posts_img_path')->storeAs('public/images', $fileName);
            // dd($request->posts_produsts_id);
            
            //DBに情報を保存
            $post = new Post();
            // dd($request->posts_produsts_id);
            $post->posts_products_id = intval($request->posts_products_id); //数値型に変換
            $post->posts_img_path = 'storage/images/' . $fileName;
            $post->posts_name = $request->posts_name;
            // $post->product->id->posts_products_id; //relation
            $post->save();
            return redirect(route('index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    // public function destroy($id)
    // {
    //     //
    // }
}
