<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    pri

    //web.phpでの処理をこちらに移したもの。
    public function index()
    {
        return view('index')
            ->with(['posts' => $posts]);
    }

    public function show($id)
    {

    }
}
