<?php
/**
 * Created by PhpStorm.
 * User: mihaela
 * Date: 6/7/2019
 * Time: 5:22 PM
 */

class Controller
{
    public function view($view)
    {
        require_once '../app/views/' . $view . '.php';
    }
}