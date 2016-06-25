<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 25/06/2016
 * Time: 11:07
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Idintity extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'idintity';
    }
}