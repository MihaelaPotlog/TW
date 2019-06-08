<?php

require_once 'app\models\Login.php';
$controller = new Login();
$username = $_POST['username'];
$pass = $_POST['pass'];
$controller->checkUser($username, $pass);
