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
    return view('welcome');

});

Route::get('/employees', [\App\Http\Controllers\EmployeeController::class,'getEmployee'])->name('employees');
Route::post('/update/{employee}', [\App\Http\Controllers\EmployeeController::class,'update'])->name('update');
Route::get('/edit/{employee}', [\App\Http\Controllers\EmployeeController::class,'edit'])->name('edit');
