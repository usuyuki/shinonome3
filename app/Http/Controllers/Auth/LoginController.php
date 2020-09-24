<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
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
        return redirect(route('greet'));
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
        } catch(\Exception $e) {
            return redirect('/login')->with('oauth_error', '予期せぬエラーが発生しました');
        }




        if ($email = $providerUser->getEmail()) {
            Auth::login(User::firstOrCreate([
                'email' => $email
            ], [
                'name' => $providerUser->getName()
            ]));

            return redirect($this->redirectTo);
        } else {
            return redirect('/login')->with('oauth_error', 'メールアドレスが取得できませんでした');
        }
    }
}
