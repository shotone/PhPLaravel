<?php

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
    return view('welcome');})->name('home')->middleware('auth');

Route::get('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/post-login', [\App\Http\Controllers\LoginController::class,'postlogin'])->name('post_login');
Route::get('/logout', [\App\Http\Controllers\LoginController::class,'logout'])->name('logout');



Route::get('/quizz', [\App\Http\Controllers\QuizzController::class,'quizz'])->name('quizz');
Route::get('/results', [\App\Http\Controllers\QuizzController::class,'result'])->name('results');
Route::post('/create_quiz', [\App\Http\Controllers\QuizzController::class,'Createquizz'])->name('Createquizz');
Route::get('/view_create_quiz', [\App\Http\Controllers\QuizzController::class,'view_create_quiz'])->name('createquizz');

Route::post('/result', [\App\Http\Controllers\QuizzController::class,'result'])->name('result');
