<html>
<link rel="stylesheet" href="styles.css">
<div class="postcard">
        <h1>{{$post->title}}</h1>
        <h2>{{$post->content}}</h2>
        <p>Автор: {{$post->author}}</p>
        <p>{{$post->created_at}}</p>
    </div>

<h1>КОММЕНТАРИИ</h1>

@foreach ($post->comments as $comment)
    <div>
        <p>{{$comment->text}}</p>
        <p>Автор: {{$comment->author}}</p>
        <p>{{$comment->created_at}}</p>
    </div>
@endforeach

<form method="POST" action="/createcomment">
    @csrf
    <input type="hidden" name="id" value={{$post->id}} />
    <p>Текст</p><input type="text" name="text" />
    <p>Автор</p><input type="text" name="author" />
    <button type="submit">Отправить комментарий</button>
</form>
<a href="/posts">Обратно</a>
</html>