<?php

/**
 * A class for comments using $_SESSION.
 */

class Session
{
    public function __construct()
    {
        session_name("vizascomments");
        session_start();
    }

    public function set($key, $values)
    {
        $_SESSION[$key] = $values;
    }

    public function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
}
