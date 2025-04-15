<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\Post; //Postモデルをインポートする

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->only('store', 'destroy');

Route::get('/', function () {
    $posts = Post::orderBy('id', 'desc')->paginate(10); //1ページあたり10件を取得
    return view('posts.index', compact('posts')); //取得した投稿データをビューに渡す
});