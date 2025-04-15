<?php

use App\Http\Controllers\PostController;
use App\Models\Post; //Postモデルをインポートする

Route::get('/', function () {
    $posts = Post::all(); //データベースから投稿を取得
    return view('index', compact('posts')); //取得した投稿データをビューに渡す
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');