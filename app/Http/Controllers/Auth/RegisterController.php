<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use BeyondCode\EmailConfirmation\Traits\RegistersUsers;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Http\Parser\Cookies as CookiesParser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;
    /**
     * @var string
     */
    protected $cookieKey;

    /**
     * Create a new controller instance.
     *
     * @param \Tymon\JWTAuth\Http\Parser\Cookies $cookies
     * @return void
     */
    public function __construct(CookiesParser $cookies)
    {
        $this->cookieKey = $cookies->getKey();
        $this->middleware('guest')->except('resendConfirmation');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password'])
        ]);
        $user->assignRole('user');
        return $user;
    }

    /**
     * Get redirect path after a successful confirmation.
     *
     * @return string
     */
    protected function redirectConfirmationTo()
    {
        return route('account');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        return response()->json([
            'status' => 'success',
            'token' => JWTAuth::fromUser($user)
        ], 200);
    }

    /**
     * Resend a confirmation code to a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resendConfirmation(Request $request)
    {
        $user = Auth::user();

        $this->sendConfirmationToUser($user);

        return response()->json([
            'status' => 'success'
        ], 200);
    }

    /**
     * The users email address has been confirmed.
     *
     * @param  mixed  $user
     * @return mixed
     */
    protected function confirmed($user)
    {
        $token = JWTAuth::fromUser($user);
        Cookie::queue($this->cookieKey, $token, 60, null, null, true, false);
    }

    public function waitConfirmation()
    {
        return view('auth.confirmation');
    }
}
