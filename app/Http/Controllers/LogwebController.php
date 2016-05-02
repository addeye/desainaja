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
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('adminweb/');
        }
        else
        {
            return redirect('/');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
