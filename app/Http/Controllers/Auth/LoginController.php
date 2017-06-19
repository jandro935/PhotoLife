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
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Login with Facebook.
     *
     * @param Generator $faker
     * @return mixed
     */
    public function facebook(Generator $faker)
    {
        $user = $this->loginSocialMedia('facebook', $faker);

        Auth::loginUsingId($user->id);

        return Redirect::route('home');
    }

    /**
     * Login with Twitter.
     *
     * @return mixed
     * @internal param Generator $faker
     */
    public function twitter()
    {
        $user = $this->loginSocialMedia('twitter');

        Auth::loginUsingId($user->id);

        return Redirect::route('home');
    }

    /**
     * Login logic.
     *
     * If the user does not exists, we create in the database.
     *
     * @param $socialMedia
     * @param null $faker
     * @return mixed
     */
    public function loginSocialMedia($socialMedia, $faker = null)
    {
        $userSocialMedia = Socialize::with($socialMedia)->user();
        $user = User::where($socialMedia.'_id', $userSocialMedia->getId())->first();

        $userNickname = $socialMedia == 'facebook' ? ($userSocialMedia->getNickname() === null ? $faker->userName : $userSocialMedia->getNickName()) : $userSocialMedia->getNickname();

        if (!$user) {
            $user = User::create([
                'username' => $userNickname,
                'name' => $userSocialMedia->getName(),
                'email' => $userSocialMedia->getEmail(),
                'password' => bcrypt('secret'),
                'user_avatar' => $userSocialMedia->getAvatar(),
                $socialMedia.'_id' => $userSocialMedia->getId()
            ]);
        }

        return $user;
    }
}
