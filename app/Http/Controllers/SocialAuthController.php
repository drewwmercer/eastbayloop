<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Parser\Cookies as CookiesParser;

class SocialAuthController extends Controller
{
    /**
     * @var string
     */
    private $service;

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
    }

    public function callback(Request $request, $service)
    {
        //
    }

    public function authenticate(Request $request, $service)
    {
        $this->service = $service;
        $provider = Socialite::driver($this->service);
        if ($request->has('code')) {
            $userData = $provider->stateless()->user();
            $user = $this->findOrCreateUser($userData);
            if ($user) {
                return $this->logIn($user);
            }
        }
    }

    protected function logIn(User $user)
    {
        try {
            if (!$token = auth()->login($user)) {
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
        Cookie::queue($this->cookieKey, $token, 60, null, null, true, false);
        return response()->json([
            'status' => 'success'
        ], 200);
    }

    protected function findOrCreateUser($userData)
    {
        $user = $this->findUser($userData->getId());
        if (!$user) {
            $user = $this->createUser($userData);
        }
        return $user;
    }

    protected function findUser($clientId)
    {
        switch ($this->service) {
            case 'google':
                return User::where('google_id', $clientId)->first();
            case 'facebook':
                return User::where('fb_id', $clientId)->first();
            default:
                return null;
        }
    }

    protected function createUser($userData)
    {
        switch ($this->service) {
            case 'google':
                $user = $this->createUserFromGoogle($userData);
                break;
            case 'facebook':
                $user = $this->createUserFromFb($userData);
                break;
            default:
                return null;
        }
        $role_user = Role::where('name', 'user')->first();
        $user->roles()->attach($role_user);
        return $user;
    }

    protected function createUserFromGoogle($userData)
    {
        $user = $this->create($userData);
        $user->google_id = $userData->getId();
        $user->first_name = $userData->user['name']['givenName'];
        $user->last_name = $userData->user['name']['familyName'];
        $user->save();
        return $user->fresh();
    }

    protected function createUserFromFb($userData)
    {
        $user = $this->create($userData);
        $user->fb_id = $userData->getId();
        $user->first_name = $userData->name;
        $user->last_name = '';
        $user->save();
        return $user->fresh();
    }

    private function create($userData)
    {
        $user = new User();
        $user->email = $userData->getEmail();
        $user->avatar = $userData->getAvatar();
        return $user;
    }
}