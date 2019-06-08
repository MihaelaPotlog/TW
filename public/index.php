<?php

require_once 'Routes.php';

function __autoload($class_name){
    if(file_exists('../app/core/' . $class_name . '.php')){
        require_once '../app/core/' . $class_name . '.php';
    }
    else if (file_exists('../app/controllers/' . $class_name . '.php')){
        require_once '../app/controllers/' . $class_name . '.php';
    }
}