<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Cookie;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Http\Parser\Cookies as CookiesParser;
use Illuminate\Support\Facades\Storage;

class SocialAuthController extends Controller
{
    /**
     * @var string
     */
    private $service;

    /**
     * @var \App\User
     */
    private $user;

    private $isNewUser = false;

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
            $user = $this->findAndUpdateUser($userData);
            if ($user) {
                if ($this->isNewUser) {
                    event(new Registered($user));
                }
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

    protected function findAndUpdateUser($userData)
    {
        $user = $this->findUserBySocialId($userData->getId());
        if (!$user) {
            $user = $this->findUserByEmail($userData->getEmail());
            return $this->createOrUpdateUser($userData, $user);
        } else {
            return $user;
        }
    }

    protected function findUserBySocialId($clientId)
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

    protected function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    protected function createOrUpdateUser($userData, User $user = null)
    {
        switch ($this->service) {
            case 'google':
                $user = $this->createOrUpdateUserFromGoogle($userData, $user);
                break;
            case 'facebook':
                $user = $this->createOrUpdateUserFromFb($userData, $user);
                break;
            default:
                return null;
        }
        if ($this->isNewUser) {
            $user->assignRole($user::USER);
        }
        return $user;
    }

    protected function createOrUpdateUserFromGoogle($userData, User $user = null)
    {
        $user = $this->createOrUpdate($userData, $user);
        $user->google_id = $userData->getId();
        $user->first_name = $user->first_name ?? $userData->user['name']['givenName'];
        $user->last_name = $user->last_name ?? $userData->user['name']['familyName'];
        $user->save();
        return $user->fresh();
    }

    protected function createOrUpdateUserFromFb($userData, User $user = null)
    {

        $user = $this->createOrUpdate($userData);
        $user->fb_id = $userData->getId();
        $user->first_name = $user->first_name ?? explode(' ', $userData->name)[0];
        $user->last_name = $user->last_name ?? explode(' ', $userData->name)[1];
        $user->save();
        return $user->fresh();
    }

    private function createOrUpdate($userData, User $user = null)
    {
        if (!$user) {
            $user = new User();
            $this->isNewUser = true;
        }
        $user->email = $user->email ?? $userData->getEmail();
        $user->avatar = $user->avatar ?? $this->storeAvatar($userData->getAvatar());
        return $user;
    }

    protected function storeAvatar(string $avatar_url): string
    {
        $file_path = 'public/avatars/' . uniqid() . '.jpg';
        Storage::put($file_path, file_get_contents($avatar_url));
        return $file_path;
    }
}