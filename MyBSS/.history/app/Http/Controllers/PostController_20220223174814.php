<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts =
        $posts = [
            'Title A',
            'Title B',
            'Title C',
        ];

    //web.phpでの処理をこちらに移したもの。
    public function index()
    {
        return view('index')
            ->with(['posts' => $this->posts]);
    }

    public function show($id)
    {
        return view('show')
            ->with([])
    }
}
