@extends('layouts.app')
@section('content')
<!--{{--@php--}}-->
<!--{{--dd($product->id);--}}-->
<!--{{--@endphp--}}-->
<section>
    <h1>作品の制作工程を登録</h1>
    <!-- エラー表示用 -->

    <!-- 作品情報 -->
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="posts_name">工程名</label>
        <input type="text" name="posts_name" id="posts_name" />
        <input type="file" name="posts_img_path" accept="image/jpeg,image/gif,image/png,video/mp4">
        {{--<!--<input type="hidden" name="posts_produsts_id" value="{{$product->id}}">-->--}}
        <button type="submit" class="btn">投稿する</button>
    </form>
</section>
@endsection
createです
<a href="{{ route('posts.index') }}">工程一覧</a>