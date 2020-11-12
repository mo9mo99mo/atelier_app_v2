indexです
@extends('layouts.app')
@section('content')
<section>
    @foreach($posts as $post)
    <div>
        <p>id:{{ $post->id }}</p>
        <p>posts_products_id{{ $post->posts_products_id }}</p>
        <p><img src="{{ $post->posts_img_path }}" alt="{{ $post->posts_name }}"></p>
        <p>工程名：{{ $post->posts_name }}</p>
        <p>{{ $post->posts_cap }}</p>
        <p>{{ $post->created_at }}</p>
    </div>
    @endforeach
    {{--<a href="{{ route('posts.create') }}">投稿</a>--}}
    
</section>
@endsection