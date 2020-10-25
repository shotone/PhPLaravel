<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [\App\Http\Controllers\PostController::class,'index']);
Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create'])->name('posts.create');
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class,'show'])->name('posts.show');
Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class,'save'])->name('posts.save');
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');
Route::put('/posts/{post}/update', [\App\Http\Controllers\PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{post}/delete', [\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete');
//    $posts = DB::table('posts')->get();
//    return $posts;
//    return view('posts')->with('posts', $posts);
