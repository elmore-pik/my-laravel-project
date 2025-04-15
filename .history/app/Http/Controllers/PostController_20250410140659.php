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

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404); //IDに該当する投稿がない場合は404エラー
        }
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        //バリデーション後に投稿を保存
        Post::create($validated);

        //投稿処理を記述
        return redirect()->route('posts.index')->with('success', 'Post added successfully!');
    }

    public function index()
    {
        //最新の投稿から順に取得
        $posts = Post::orderBy('id', 'desc')->paginate(10); //'id'を基準に振順で並べ1ページあたり10件を取得

        //$postsの中身を確認
        dd($posts);

        //'posts.index'というビューにデータを渡す
        return view('posts.index', compact('posts'));
    }
}