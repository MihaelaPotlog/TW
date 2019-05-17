<?php

require_once '..\vendor\autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=..\cric-240015-02a9bceaefa0.json');
$client = new Google_Client();

$service=new Google_Service_Fusiontables($client);


$client->useApplicationDefaultCredentials();
$client->setApplicationName("CriC");
$client->setScopes('https://www.googleapis.com/auth/fusiontables');

 

$tableId="1t88h2rQ-TYF7J-z3lgvHpIvL5IhgLGc3dPapj5YS";
$queryResult= $service->query->sql("SELECT * FROM 1t88h2rQ-TYF7J-z3lgvHpIvL5IhgLGc3dPapj5YS");
$rows=$queryResult->getRows();
var_dump($rows);
echo $rows;
echo "ID:";
echo $tableId;


?>