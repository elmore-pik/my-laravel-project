<?php

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');