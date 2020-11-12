@extends('layouts.app')
@section('content')
<section>
    product.show.blade
    <!-- エラー表示用 -->
    
    <!-- 作品情報 -->
    <p>{{ $product->id }}</p>
    <p>{{ $product->product_name }}</p>
    
    <form method="GET" action="" enctype="multipart/form-data">
        @csrf
            
    </form>
</section>
@endsection