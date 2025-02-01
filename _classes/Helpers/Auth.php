<?php

namespace Helpers;

class Auth
{
    /*static function check()
    {
        echo "Auth Check <br>";
    }*/

    static function check()
    {
        session_start();
        if (isset($_SESSION['user'])) { //if have user data in seesion 
            return $_SESSION['user']; //return user data
        }

        HTTP::redirect("/index.php", "auth=fail");  //else redirect to index.php w auth=fail query
    }
}
