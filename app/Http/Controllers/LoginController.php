<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function login_form()
    {
    	return view('auth.login');
    }

    public function login(Request $request)
    {
    	$data = $request->only('email', 'password');

        if(Auth::attempt($data)) {
            return redirect()->intended('dashboard');
        }
    }

}
