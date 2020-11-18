@extends('layouts.app')
@section('content')

<section>
    <!--product.show.blade-->
    <!-- エラー表示用 -->
    <div class="block_product">
        <!-- 作品情報 -->
        {{--<p>{{ $product->id }}</p>--}}
        <p>{{ $product->product_name }}</p>
        <!-- 作者情報 -->
        <!-- ユーザー名 -->
        {{--<p>user.id:{{ $product->user->id }}, {{ $product->user->name }}</p>--}}
        <!-- ユーザーアイコン -->
        <div class="block_product_userinfo">
            <p><img src="{{ asset($product->user->users_icon_path) }}" class="img_crop_circle"></p>
            <p>{{ $product->user->name }}</p>
        </div>
    </div>
    
    @foreach($product->posts as $post)
    <div class="block_product">
        {{--<p>posts(確認用) id:{{ $post->id }}, posts_products_id:{{ $post->posts_products_id }}</p>確認用--}}
        <p><img src="{{ asset($post->posts_img_path) }}" alt="工程写真：{{ $post->posts_name }}" class="posts_img"></p>
        <p>{{ $post->posts_name }}</p>
        <p class="product_caption">{{ $post->posts_cap }}</p>
    </div>
    @endforeach
    
    <form method="GET" action="" enctype="multipart/form-data">
        @csrf
           <a href="{{ route('posts.create') }}" type="button" class="btn btn-light">制作工程を追加する</a>
    </form>
</section>
@endsection