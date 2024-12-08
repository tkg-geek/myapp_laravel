<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿フォーム表示ページ（このメソッドが必要）
    public function create()
    {
        return view('posts.create');
    }

    // 投稿データ保存処理
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id; // ログインユーザーのIDを設定
        $post->save();

        return redirect('/posts');
    }
    // Dashboardにアクセスしたときの処理
    public function index() {
        // 投稿データを取得（ユーザー生成コンテンツを取得）
        $posts = Post::latest()->get();

        // 投稿一覧ページにデータを渡す
        return view('posts.index', compact('posts'));
    }
}
