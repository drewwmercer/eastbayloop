<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Parser\Cookies as CookiesParser;

class LoginController extends Controller
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
        $this->middleware('guest')->except('logout');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => 'error',
                    'error' => 'invalid_credentials',
                    'msg' => 'Invalid Credentials'
                ], 400);
            }
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error',
                'error' => 'could_not_create_token',
                'msg' => 'Could not create token'
            ], 500);
        }
        Cookie::queue($this->cookieKey, $token, 60);
        return response()->json([
            'status' => 'success'
        ], 200);
    }

    public function logout()
    {
        try {
            JWTAuth::setToken(Cookie::get($this->cookieKey))->invalidate()->unsetToken();
        } catch (JWTException $e) {
            return response()->json([
                'status' => 'error',
                'error' => 'failed_logout',
                'msg' => 'Failed to logout, please try again.'
            ], 500);
        }
        Cookie::queue(Cookie::forget($this->cookieKey));
        return redirect('/');
    }
}
