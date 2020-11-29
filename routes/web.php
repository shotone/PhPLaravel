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
})->name('home')->middleware('auth');


Route::get('/posts', [\App\Http\Controllers\PostController::class,'index'])->middleware('auth');;
Route::get('/posts/create', [\App\Http\Controllers\PostController::class,'create'])->name('posts.create')->middleware('auth');;
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class,'show'])->name('posts.show')->middleware('auth');;
Route::post('/posts/save_post', [\App\Http\Controllers\PostController::class,'save'])->name('posts.save')->middleware('auth');;
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit')->middleware('auth');;
Route::put('/posts/{post}/update', [\App\Http\Controllers\PostController::class,'update'])->name('posts.update')->middleware('auth');;
Route::delete('/posts/{post}/delete', [\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete')->middleware('auth');;


Route::post('/register', [\App\Http\Controllers\LoginController::class,'register'])->name('register');
Route::get('/register_view', [\App\Http\Controllers\LoginController::class,'register_view'])->name('register_view');
Route::get('/register/login', [\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/register/post-login', [\App\Http\Controllers\LoginController::class,'postlogin'])->name('post_login');
Route::get('/register/logout', [\App\Http\Controllers\LoginController::class,'logout'])->name('logout');


//    $posts = DB::table('posts')->get();
//    return $posts;
//    return view('posts')->with('posts', $posts);

//Route::middleware('auth')->group(function (){
//
//});
