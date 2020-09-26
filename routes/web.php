<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//あいさつ'/greet'
Route::get('/greet',[GreetController::class,'showGreetPage'])->name('greet');
Route::post('/greet',[GreetController::class,'postGreet'])->name('greet');
//コチャ '/directmessage'
// Route::get('/directmessage',[Controller::class,'directmessage'])->name('directmessage');
//プロフィールと設定'/setting'
// Route::get('/setting',[Controller::class,'setting'])->name('setting');
//ヒストリーと起床時間'/record'
// Route::get('/record',[Controller::class,'record'])->name('record');
//プライバイシーポリシー '/privacypolicy'
Route::get('/privacypolicy',[IndexController::class,'privacypolicy'])->name('privacypolicy');
//ご利用にあたって '/explain'
Route::get('/explain',[IndexController::class,'explain'])->name('explain');
//お問い合わせ'/contact'
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
//しののめの使い方 '/'
Route::get('/',[IndexController::class,'index'])->name('index');




//laravel/uiでのauth関連
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//socialiteのためのルーティング
Route::get('/login/{provider}', [LoginController::class,'redirectToProvider']);
Route::get('login/{provider}/callback', [LoginController::class,'handleProviderCallback']);