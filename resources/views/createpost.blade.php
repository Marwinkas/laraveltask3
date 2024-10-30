<html>


<form method="POST" action="/createpost">
    @csrf

    <!-- Эквивалентно ... -->
    <p>Название</p><input type="text" name="title" />
    <p>Описание</p><input type="text" name="content" />
    <p>Автор</p><input type="text" name="author" />
    <button type="submit">Создать пост</button>
</form>
<a href="/posts">Посты</a>

</html>