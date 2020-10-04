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
        $user = auth()->user();

        return back();
    }
}
