<?php
<?php
require_once 'vendor\autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\xampp\htdocs\TW\cric-240015-02a9bceaefa0.json');
$client = new Google_Client();

$service=new Google_Service_Fusiontables($client);


$client->useApplicationDefaultCredentials();
$client->setApplicationName("CriC");
$client->setScopes('https://www.googleapis.com/auth/fusiontables');

 

$tableId="1GkupWsLva9DRgE4GMVJdPurGsP1egPo1mmzG5OQE";
$queryResult= $service->query->sql("SELECT * FROM $tableId");
$rows=$queryResult->getRows();
var_dump($rows);
echo $rows;
echo "ID:";
echo $tableId;


?>