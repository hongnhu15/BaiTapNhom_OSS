<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;




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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','App\Http\Controllers\LayoutController@gems');
Route::get('/gems','App\Http\Controllers\LayoutController@gems');
Route::get('/gems/loaisanpham/{id}','App\Http\Controllers\LayoutController@loaisanpham');

Route::get('/gems/chitiet/{id}','App\Http\Controllers\LayoutController@chitiet');

Route::get('/accountpanel','App\Http\Controllers\AccountController@accountpanel')
->middleware('auth')->name("account");
Route::post('/saveaccountinfo','App\Http\Controllers\AccountController@saveaccountinfo')
->middleware('auth')->name('saveinfo');

Route::get('auth/facebook',function(){
    return Socialite::driver('facebook')->redirect();

});
Route::get('auth/facebook/callback',function(){
    return 'Callback Login Facebook';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
