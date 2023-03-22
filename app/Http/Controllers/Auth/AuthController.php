<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        $title = 'Login';
        return view('auth.login', compact('title'));
    }

    public function register()
    {
        $title = 'Register';
        return view('auth.register', compact('title'));
    }

    public function loginDo(Request $request)
    {
        if(Auth::attempt(['username' => $request->username, 'password'=> $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logoutDo()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('login');
    }
}
