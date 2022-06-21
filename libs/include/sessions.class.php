<?php

class session
{
    public static function start()
    {
        session_start();
        // print($_SERVER);
    }
    public static function destroy()
    {
        session_destroy();
    }
    public static function set($key, $value)
    {
        $_SESSION[$key]=$value;
        print("$key = $value<br>"); ?><?php
    }
    public static function isset($key)
    {
        //  isset($_SESSION[$key]);
        return isset($_SESSION[$key]);
    }
    public static function get($key)
    {
        if (session::isset($key)) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
}
