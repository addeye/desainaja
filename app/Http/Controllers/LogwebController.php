<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LogwebController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function ceklogin(Request $request)
    {
        // set the remember me cookie if the user check the box
        $remember = ($request->has('remember')) ? true : false;

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
            return redirect()->intended('adminweb/');
        }
        else
        {
            return redirect('login')->with('alert-failed', 'Password dan username salah.');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function forgotpassword()
    {

    }
}
