<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //web.phpでの処理をこちらに移したもの。
    public function index()
    {
        // $posts = Post::all();
        // 投稿を新しい順に並べるようにデータを抽出する場合。下記の書き方もあるが短縮がある
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();

        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')
            ->with(['post' => $post]);
    }
}
