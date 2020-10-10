<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Greet;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;


use App\Models\Follower;

class GreetController extends Controller
{

    //古い処理
    // public function showGreetPage()
    // {
    //     $greets = Greet::latest()->get();
    //     // $user = User::where('id', '=', $greets->user_id)->first();

    //     return view('main.left.greet', ['greets' => $greets,]);
    // }

    public function postGreet(Request $request)
    {
        $request->validate([
            'greet' => 'required|max:140',
        ]);

        Greet::create([
            'user_id' => Auth::user()->id,
            // 'name' => Auth::user()->name,
            'greet' => $request->greet,
        ]);
        return back();
    }
    //


    // 一覧表示
    public function showGreetPage(Greet $greet, Follower $follower)
    {
        $user = auth()->user();
        $follow_ids = $follower->followingIds($user->id);
        // followed_idだけ抜き出す
        $following_ids = $follow_ids->pluck('followed_id')->toArray();

        $timelines = $greet->getTimelines($user->id, $following_ids);

        return view('greet.index', [
            'user'      => $user,
            'timelines' => $timelines
        ]);
    }


    // あいさつ入力画面
    public function index()
    {
        //
    }
    // あいさつ入力画面
    public function create()
    {
        //
    }

    // あいさつ投稿処理
    public function store(Request $request)
    {
        //
    }

    // あいさつ詳細画面→不要


    // ツイート編集画面→不要


    // ツイート削除処理
    public function destroy($id)
    {
        //
    }
}
