@extends('layouts.app')
@section('content')

<section>
    product.show.blade
    <!-- エラー表示用 -->
    
    <!-- 作品情報 -->
    <p>{{ $product->id }}</p>
    <p>{{ $product->product_name }}</p>
    
    <!-- 作者情報 -->
    <!-- ユーザー名 -->
    <p>user.id:{{ $product->user->id }}, {{ $product->user->name }}</p>
    <!-- ユーザーアイコン -->
    <p><img src="{{ asset($product->user->users_icon_path) }}"></p>
    
    
    @foreach($product->posts as $post)
    <div>
        <p>posts(確認用) id:{{ $post->id }}, posts_products_id:{{ $post->posts_products_id }}</p><!--確認用-->
        <p><img src="{{ asset($post->posts_img_path) }}" alt="工程写真：{{ $post->posts_name }}"></p>
        <p>{{ $post->posts_name }}</p>
        <p>{{ $post->posts_cap }}</p>
    </div>
    @endforeach
    
    <form method="GET" action="" enctype="multipart/form-data">
        @csrf
            
    </form>
</section>
@endsection