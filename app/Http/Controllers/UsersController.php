<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Greet;
use App\Models\Follower;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //ユーザー取得関数
    //User $userはメソッドインジェクション呼ばれる仕組み、依存性の注入　インスタント発行不要
    public function index(User $user)
    {
        $all_users = $user->getAllUsers(auth()->user()->id);

        return view('users.index', [
            'all_users'  => $all_users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Greet $greet, Follower $follower)
    {
        $login_user = auth()->user();
        $is_following = $login_user->isFollowing($user->id);
        $is_followed = $login_user->isFollowed($user->id);
        $timelines = $greet->getUserTimeLine($user->id);
        $greet_count = $greet->getGreetCount($user->id);
        $follow_count = $follower->getFollowCount($user->id);
        $follower_count = $follower->getFollowerCount($user->id);

        return view('users.show', [
            'user'           => $user,
            'is_following'   => $is_following,
            'is_followed'    => $is_followed,
            'timelines'      => $timelines,
            'greet_count'    => $greet_count,
            'follow_count'   => $follow_count,
            'follower_count' => $follower_count
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //ユーザー詳細画面
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
    //ユーザー詳細画面のバリデーション
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $validator = Validator::make($data, [

            'name'          => ['required', 'string', 'max:255'],
            'profile_photo_path' => ['file', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'explain'         => ['string', 'max:300',]
        ]);
        $validator->validate();
        $user->updateProfile($data);

        return redirect('users/' . $user->id);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //フォロー関係→https://qiita.com/namizatork/items/0c81b0a94a1084cda6de#%E3%83%A6%E3%83%BC%E3%82%B6%E4%B8%80%E8%A6%A7%E8%A1%A8%E7%A4%BA%E7%94%BB%E9%9D%A2
    // フォロー
    public function follow(User $user)
    {
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if (!$is_following) {
            // フォローしていなければフォローする
            $follower->follow($user->id);
            return back();
        }
    }

    // フォロー解除
    public function unfollow(User $user)
    {
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if ($is_following) {
            // フォローしていればフォローを解除する
            $follower->unfollow($user->id);
            return back();
        }
    }
}
