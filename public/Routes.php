<?php
/**
 * Created by PhpStorm.
 * User: mihaela
 * Date: 6/7/2019
 * Time: 5:24 PM
 */
Route::set("Autoritati",function (){
    $controller = new Autoritati();
    $controller->index();
});

Route::set("crisismap",function (){
    $controller = new CrisisMap();
    $controller->index();
});

Route::set("formular-disparitii",function (){
    require_once ("../app/views/formular-disparitii.php");
});

Route::set("formularAlerte.php",function (){
    require_once ("../app/views/formularAlerte.php");
});
