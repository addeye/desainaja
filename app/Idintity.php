<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 25/06/2016
 * Time: 11:17
 */

namespace App;


use Illuminate\Support\Facades\Auth;

class Idintity
{
    public function name()
    {
        return Auth::user()->name;
    }

    public function level()
    {
        return Auth::user()->level->nama_level;
    }

    public function email()
    {
        return Auth::user()->email;
    }
}