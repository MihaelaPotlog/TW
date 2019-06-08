<?php
/**
 * Created by PhpStorm.
 * User: mihaela
 * Date: 6/7/2019
 * Time: 5:22 PM
 */

class Route
{
    public static function set($route, $function)
    {


        $url = 'main';

        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }

        if ($url == $route) {
            $function->__invoke();
        }
    }
}