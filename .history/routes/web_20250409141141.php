<?php

use App\Http\Controllers\PostController;
use App\Models\Post; //Postモデルをインポートする

Route::get('/', function () {
    $posts = Post::all(); //データベースから投稿を取得
    return view('index');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');