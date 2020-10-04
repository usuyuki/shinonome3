<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DMController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\RecordController;

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

//ホーム
Route::get('/home', [IndexController::class, 'home'])->name('home');
//あいさつ'/greet'
Route::get('/greet', [GreetController::class, 'showGreetPage'])->name('greet');
Route::post('/greet', [GreetController::class, 'postGreet'])->name('greet');

//ログインしてない場合→ログインに遷移する！！！
Route::group(['middleware' => 'auth'], function () {
    //コチャ '/directmessage'
    Route::get('/directmessage', [DMController::class, 'directmessage'])->name('directmessage');
    //プロフィールと設定'/setting'
    Route::get('/setting', [SettingController::class, 'showSetting'])->name('setting');
    Route::post('/setting', [SettingController::class, 'postSetting'])->name('setting');
    //ヒストリーと起床時間'/record'
    Route::get('/record', [RecordController::class, 'record'])->name('record');
});

//プライバイシーポリシー '/privacypolicy'
Route::get('/privacypolicy', [IndexController::class, 'privacypolicy'])->name('privacypolicy');
//ご利用にあたって '/explain'
Route::get('/explain', [IndexController::class, 'explain'])->name('explain');
//お問い合わせ'/contact'
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
//お問い合わせ'/contact'
Route::get('/release', [IndexController::class, 'release'])->name('release');
//しののめの使い方 とTOP'/'
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/developer', [IndexController::class, 'developer'])->name('index');




//laravel/uiでのauth関連
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//socialiteのためのルーティング
Route::get('/login/{provider}', [LoginController::class, 'redirectToProvider']);
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback']);
