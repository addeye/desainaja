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

        return view('login');
    }

    public function ceklogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('user');
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
