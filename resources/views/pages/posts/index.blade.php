indexです
@foreach($posts as $post)
{{ $post->id }}
{{ $post->posts_products_id }}
{{ $post->posts_img_path }}
{{ $post->posts_name }}
{{ $post->posts_cap }}
{{ $post->created_at }}
@endforeach
<a href="{{ route('posts.create') }}">投稿</a>