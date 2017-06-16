<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Faker\Generator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite as Socialize;

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
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Login with Facebook.
     *
     * If the user does not exists, we create in the database.
     *
     * @param Generator $faker
     * @return mixed
     */
    public function facebook(Generator $faker)
    {
        $userFacebook = Socialize::with('facebook')->user();
        $userNickname = $userFacebook->getNickname() === null ? $faker->userName : $userFacebook->getNickName();
        $user = User::where('facebook_id', $userFacebook->getId())->first();

        if (!$user) {
            $user = User::create([
                'username' => $userNickname,
                'name' => $userFacebook->getName(),
                'email' => $userFacebook->getEmail(),
                'password' => bcrypt('secret'),
                'user_avatar' => $userFacebook->getAvatar(),
                'facebook_id' => $userFacebook->getId()
            ]);
        }

        Auth::loginUsingId($user->id);

        return Redirect::route('home');
    }

    /**
     * Login with Twitter.
     *
     * If the user does not exists, we create in the database.
     *
     * @param Generator $faker
     * @return mixed
     */
    public function twitter(Generator $faker)
    {
        $userTwitter = Socialize::with('twitter')->user();
        $userEmail = $userTwitter->getEmail() === null ? $faker->email : $userTwitter->getEmail();
        $user = User::where('twitter_id', $userTwitter->getId())->first();

        if (!$user) {
            $user = User::create([
                'username' => $userTwitter->getNickName(),
                'name' => $userTwitter->getName(),
                'email' => $userEmail,
                'password' => bcrypt('secret'),
                'user_avatar' => $userTwitter->getAvatar(),
                'twitter_id' => $userTwitter->getId()
            ]);
        }

        Auth::loginUsingId($user->id);

        return Redirect::route('home');
    }
}

























