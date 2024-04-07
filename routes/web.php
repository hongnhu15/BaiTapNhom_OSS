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
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/



Route::get('/gems','App\Http\Controllers\LayoutController@gems');
Route::get('/gems/loaisanpham/{id}','App\Http\Controllers\LayoutController@loaisanpham');
Route::get('gems/chitiet/{id}','App\Http\Controllers\LayoutController@chitiet');


