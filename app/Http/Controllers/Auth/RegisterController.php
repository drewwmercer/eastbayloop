<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterFormRequest;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Http\Parser\Cookies as CookiesParser;

class RegisterController extends Controller
{
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
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(RegisterFormRequest $data)
    {
        $user = User::create([
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email'     => $data->email,
            'password'  => bcrypt($data->password)
        ]);

        $role_user = Role::where('name', 'user')->first();
        $user->roles()->attach($role_user);
        return $user;
    }

    public function register(RegisterFormRequest $request)
    {
        $user = $this->create($request);
        $token = JWTAuth::fromUser($user);

        event(new Registered($user));

        Cookie::queue($this->cookieKey, $token, 60, null, null, true, false);

        return redirect('/');
    }
}
