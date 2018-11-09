<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
        if ($user->password && !$request->has('old_password')) {
            return Redirect::back()->withErrors([
                'old_password' => [
                    'Old password is required'
                ]
            ]);
        } else if (!Hash::check($request->input('old_password'), $user->password)){
            return Redirect::back()->withErrors([
                'old_password' => [
                    'Old password is not correct'
                ]
            ]);
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return Redirect::back();
    }
}
