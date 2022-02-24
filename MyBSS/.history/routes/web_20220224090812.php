<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', ['App\Http\Controllers\PostController', 'index']);

//名前空間付きクラスでは::classとすると''を外せる
// Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

//またこう書いた場合はuseに書けばさらに短縮可能
Route::get('/', [PostController::class, 'index']);
    ->name('posts.index');

// Route::get('/posts/0', [PostController::class, 'index']);
// Route::get('/posts/1', [PostController::class, 'index']);
// Route::get('/posts/2', [PostController::class, 'index']);
// データが増えてきて大変なのでまとめて書く。
Route::get('/posts/{id}', [PostController::class, 'show']);
