<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Support\Facades\Auth;
use \App\Models\Greet;
use \App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function loggedOut($request)
    {
        // return redirect(route('/'));
        //20200929←Route [/] not definedを解消できず、結果リダイレクト先をそのままいじったらなんとかいけた。しかしこれでOKなのか？
        return redirect("/greet");
    }




    //socialite関係の関数
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }




    public function handleProviderCallback($provider)
    {
        try {
            //\Socialite::with($provider)->user();でプロバイダーから送られた情報が取得できる
            $providerUser = \Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('oauth_error', '予期せぬエラーが発生しました');
        }




        if (is_null($providerUser->token)) {
            //トークン取れなかった時
            return redirect('/greet')->with('oauth_error', 'トークンが取得できませんでした');
        } else {
            //firstOrCreate→DBにデータが存在する場合は取得し、存在しない場合はDBにデータを登録した上でインスタンスを取得する
            //第一引数→検索条件のカラム名をキーとした連想配列を入れる,第２引数→データが取得できなかった場合にDBに保存する際に使用
            Auth::login(User::firstOrCreate([
                'twitter_token' => $providerUser->token
            ], [
                'name' => $providerUser->name,
                'twitter_id' => $providerUser->id,
                'twitter_name' => $providerUser->nickname, // @abc
                'profile_photo_path' => $providerUser->avatar_original
                // 'profile_photo_path'=>$providerUser->profile_photo_path_url_https,

            ]));

            return redirect($this->redirectTo);
        }
    }
}
