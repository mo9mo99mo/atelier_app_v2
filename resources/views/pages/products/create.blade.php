@extends('layouts.app')
@section('content')
<section>
    <!-- エラー表示用 -->
    
    <!-- 作品情報 -->
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
            <label for="product_name">作品名</label>
            <input type="text" name="product_name" id="product_name"/>
            <button type="submit" class="btn">作成する</button>
    </form>
</section>
@endsection