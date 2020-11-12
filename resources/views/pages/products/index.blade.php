@extends('layouts.app')
@section('content')
<section>
    index.blade.phpです
    <!-- エラー表示用 -->
    
    <!-- 作品情報 -->
    <a href="{{ route('products.create') }}">作品情報を登録</a>
    
    @foreach($products as $product)
    <p>{{ $product->id }}</p>
    <p>{{ $product->product_name }}</p>
    <!--第2引数でパラメータを渡す-->
    <a href="{{ route('products.show', [ $product->id ]) }}">制作工程をみる</a>
    @endforeach
    
</section>
@endsection