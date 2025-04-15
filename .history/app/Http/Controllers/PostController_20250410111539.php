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

        //投稿処理を記述
        return redirect()->route('posts.index')->with('message', '投稿が成功しました！');
    }

    public function index()
    {
        $posts = Post::pagenate(10); //1ページあたり10件を取得
        return view('posts.index', compact('posts'));
    }
}