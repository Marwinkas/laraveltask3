<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function createpost(Request $request): RedirectResponse
    {
        Post::create([
            "title"=> $request->title,
            "content"=> $request->content,
            "author"=> $request->author,
        ]);
        return redirect('/posts');
    }
    public function createcomment(Request $request): RedirectResponse
    {
        Comment::create([
            "text"=> $request->text,
            "author"=> $request->author,
            "post_id"=> $request->id
        ]);

        return redirect('/post/' . $request->id)->with('success','');
    }
    public function showcreatepost(): View
    {
        return view('createpost', [
        ]);
    }
    public function show(): View
    {
        return view('posts', [
            'posts' => Post::orderByDesc('created_at')->get(),
        ]);
    }
    public function showpost(string $id): View
    {
        return view('post', [
            'post' => Post::find($id)
        ]);
    }
}
