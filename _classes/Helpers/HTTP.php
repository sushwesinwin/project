<?php

namespace Helpers;

class HTTP
{
    /*static function redirect()
    {
        echo "HTTP Redirect <br>";
    }*/

    static $base = "http://localhost/project"; //input base url 
    static function redirect($page, $q = "")  //url with query
    {
        $url = static::$base . $page; //concat base url w query
        if ($q) $url .= "?$q";

        header("location: $url");
        exit();
    }
}

// check on browser http://localhost/project/index.php?http=test
