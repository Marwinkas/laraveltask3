<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id}', action: [PostController::class, 'showpost']);
Route::get('/posts', action: [PostController::class, 'show']);
Route::get('/', action: [PostController::class, 'showcreatepost']);
Route::post('/createpost', action: [PostController::class, 'createpost']); 
Route::post('/createcomment', action: [PostController::class, 'createcomment']); 