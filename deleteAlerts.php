<?php
//
//$identifier=file_get_contents('php://input');
$identifier="MERGE";
$sql="DELETE from 15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff WHERE identifier=$identifier";

$service->query->sql($sql);
?>