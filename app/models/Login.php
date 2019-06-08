<?php

class Login
{
    private static $dbServername = "localhost";
    private static $dbUsername = "root";
    private static $dbPassword = "";
    private static $dbName = "logincric";


    public static function getConection()
    {
        return mysqli_connect(self::$dbServername, self::$dbUsername, self::$dbPassword, self::$dbName);
    }
}
