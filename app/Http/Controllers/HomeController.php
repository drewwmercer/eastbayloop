<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB as DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     
    }
    
    public function login(Request $request)
    {
        $type   = base64_decode($request->input('t'));
        
        $data['type']    = $type;
        
        return view('pages.login')->with($data);
    }
    
    public function register(Request $request)
    {
        $type   = base64_decode($request->input('t'));
        
        $data['type']    = $type;
        
        return view('pages.register')->with($data);
    }
   
}
