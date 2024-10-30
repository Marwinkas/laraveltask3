<html>
<link rel="stylesheet" href="styles.css">
<div class="posts">
@foreach ($posts as $post)
    <div class="postcard">
        <h1>{{$post->title}}</h1>
        <h2>{{$post->content}}</h2>
        <p>Автор: {{$post->author}}</p>
        <p>{{$post->created_at}}</p>
        <div class="link"><a href="post/{{$post->id }}">Открыть пост</a></div>
    </div>
@endforeach 
</div>
<a href="/">Создать пост</a>
</html>