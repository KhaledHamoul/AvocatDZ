<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use App\User;
use App\Client;
use App\Professionnel;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback( $provider )
    {
        $user = Socialite::driver($provider)->user();
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            Auth::loginUsingId($authUser->id);
            $pros = Professionnel::where('user_id',$authUser->id)->get();
            $clients = CLient::where('user_id',$authUser->id)->get();
            
            if( $pros->count() > 0 ) {
                session(['dashboard_path' => '/accueil_professionnel']);
                return redirect()->intended('/accueil_professionnel');
            }
            else if( $clients->count() > 0 ){
                session(['dashboard_path' => '/']);
                return redirect()->intended('/');
            }
            else {
                session(['dashboard_path' => '/admin']);
                return redirect()->intended('/admin');
            }
        }
        return redirect()->back()->with('user',  $user)->with('provider',$provider);
        
                
        
    }
}
