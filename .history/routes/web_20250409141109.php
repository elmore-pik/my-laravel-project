<?php

use App\Http\Controllers\PostController;
use App\Models\Post; //Postモデルをインポートする

Route::get('/', function () {
    return view('index');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');