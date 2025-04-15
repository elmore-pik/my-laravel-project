<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function index()
    {
        //最新の投稿から順に取得
        $posts = Post::orderBy('id', 'desc')->get();

        //'posts.index'というビューにデータを渡す
        return view('posts.index', compact('posts'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        
        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}