@extends('layouts.app')
@section('content')

<section>
    product.show.blade
    <!-- エラー表示用 -->
    
    <!-- 作品情報 -->
    <p>{{ $product->id }}</p>
    <p>{{ $product->product_name }}</p>
    
    
   @foreach($product->posts as $post)
    <p>id{{ $post->id }}</p>
    <p>{{ $post->posts_name }}</p>
    <p><img src="{{ asset($post->posts_img_path) }}" alt="工程写真：{{ $post->posts_name }}"></p>
    @endforeach
    
    <form method="GET" action="" enctype="multipart/form-data">
        @csrf
            
    </form>
</section>
@endsection