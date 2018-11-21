<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('auth.account')->with(['user' => $request->user()]);
    }

    public function updatePassword(UpdatePasswordFormRequest $request)
    {
        $user = $request->user();
        if ($user->password) {
            if (!$request->has('old_password')) {
                return response()->json([
                    'status' => 'error',
                    'error' => 'old_password_required',
                    'msg' => 'Old password is required'
                ], 400);
            } elseif (!Hash::check($request->input('old_password'), $user->password)) {
                return response()->json([
                    'status' => 'error',
                    'error' => 'old_password_incorrect',
                    'msg' => 'Old password is not correct'
                ], 400);
            }
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        $token = auth()->login($user); // update payload of JWT
        return response()->json([
            'status' => 'success'
        ], 200)->withCookie(cookie('token', $token, 60, null, null, true, false));
    }

    public function updateAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $user = $request->user();
            $user->avatar = $request->avatar->storeAs('public/avatars', uniqid() . '.jpg');
            $user->save();
            $token = auth()->login($user); // update payload of JWT
            return response()->json([
                'status' => 'success',
                'data' => [
                    'image_url' => $user->avatar_url
                ]
            ], 200)->withCookie(cookie('token', $token, 60, null, null, true, false));
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'invalid_request',
                'msg' => 'Invalid Request'
            ], 400);
        }
    }
}
