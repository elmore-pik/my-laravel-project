<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
    }

    public function index()
    {
        //最新の投稿から順に取得
        $posts = Post::orderBy('id', 'desc')->paginate(10); //'id'を基準に振順で並べ1ページあたり10件を取得

        //'posts.index'というビューにデータを渡す
        return view('posts.index', compact('posts'));
    }
}