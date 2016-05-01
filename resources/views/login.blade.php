<?php
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 01/05/2016
 * Time: 21:18
 */
        ?>
<h3>Login</h3>
<form method="post" action="{{URL('/login')}}">
<input type="text" name="email">
<input type="password" name="password">
    {{ csrf_field() }}
<input type="submit" name="login" value="Login">
</form>
