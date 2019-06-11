<?php
session_start();
/**
 * Created by PhpStorm.
 * User: mihaela
 * Date: 6/7/2019
 * Time: 5:24 PM
 */
Route::set("Autoritati", function () {
    $controller = new Autoritati();
    $controller->index();
});

Route::set("crisismap", function () {
    $controller = new CrisisMap();
    $controller->index();
});

Route::set("login-submit", function () {
    $controller = new loginController();
    $controller->loginFunction();
});

Route::set("formular-disparitii", function () {
    require_once("../app/views/formular-disparitii.php");
});

Route::set("formularAlerte", function () {
    $controller = new formularAlerte();
    $controller->index();
});

Route::set("autoritati-logout", function () {
    unset($_SESSION['is_logged']);
    $controller = new CrisisMap();
    $controller->index();
});
