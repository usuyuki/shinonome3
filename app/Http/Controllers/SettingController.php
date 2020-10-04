<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Greet;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function showSetting(Request $request)
    {
        //備忘録→下のAuthはバックスラッシュが必要　バックスラッシュすると
        $user = \Auth::user();
        // \Log::debug($user);
        return view('main.left.setting', ['user' => $user,]);
    }
    public function postSetting(Request $request)
    {
        //ログインユーザーデーターの取得
        $user = \Auth::user();

        //リクエストデータの処理(何も入力しなかった時用)
        if (is_null($request->profile_photo_path)) {
            $request->profile_photo_path = $user->profile_photo_path;
        }
        if (is_null($request->name)) {
            $request->name = $user->name;
        }
        //画像のパス処理
        //xamppに保存されてしまいうまくいかない。
        // $path = $request->file('profile_photo_path')->store('public/img/user/profile_photo_path');
        // $user->profile_photo_path = basename($path);

        //更新
        $user = User::where('id', '=', $user->id)->first();
        $user->update([
            'name' => $request->name,
            'explain' => $request->explain,
            'profile_photo_path' => $request->profile_photo_path,
        ]);
        return redirect('/setting');
    }
}
