<?php
require_once 'vendor\autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=cric-240015-02a9bceaefa0.json');
$client = new Google_Client();

$service=new Google_Service_Fusiontables($client);


$client->useApplicationDefaultCredentials();
$client->setApplicationName("CriC");
$client->setScopes('https://www.googleapis.com/auth/fusiontables');

 
$tableId="1t88h2rQ-TYF7J-z3lgvHpIvL5IhgLGc3dPapj5YS";
  $xml = file_get_contents('php://input');
  $file = fopen('formData.xml', 'w+');
  fwrite($file, $xml);
  fclose($file);

$xmlDoc = new DOMDocument();
$xmlDoc->load("formData.xml");

    $identifier= $xmlDoc->getElementsByTagName("identifier")->item(0)->textContent;
    $sender= $xmlDoc->getElementsByTagName("sender")->item(0)->textContent;
    $sent= $xmlDoc->getElementsByTagName("sent")->item(0)->textContent;
    $status= $xmlDoc->getElementsByTagName("status")->item(0)->textContent;
    $scope= $xmlDoc->getElementsByTagName("scope")->item(0)->textContent;
    $category= $xmlDoc->getElementsByTagName("category")->item(0)->textContent;
    $event= $xmlDoc->getElementsByTagName("event")->item(0)->textContent;
    $urgency= $xmlDoc->getElementsByTagName("urgency")->item(0)->textContent;
    $severity= $xmlDoc->getElementsByTagName("severity")->item(0)->textContent;
    $certainty= $xmlDoc->getElementsByTagName("certainty")->item(0)->textContent;
    $description== $xmlDoc->getElementsByTagName("description")->item(0)->textContent;
    $areaDesc= $xmlDoc->getElementsByTagName("areaDesc")->item(0)->textContent;
    $location= $xmlDoc->getElementsByTagName("circle")->item(0)->textContent;

 
  $coordinates=explode(',',$location);


$sqlInsert=" ('identifier', 'sender' , 'sent', 'status' , 
             'scope', 'category', 'event', 'urgency' , 
             'severity' , 'certainty'  , 'description' , 
             'areaDesc' , 'latitude' , 'longitude' , 'type') 
              VALUES( ' $identifier', '$sender' , '$sent', '$status' , 
             '$scope', '$category', '$event', '$urgency' , 
             '$severity' , '$certainty'  , '$description' , 
             '$areaDesc' , '$coordinates[0]' , '$coordinates[1]' , 'new' )";


$service->query->sql("INSERT INTO " . $tableId . $sqlInsert );

$queryResult= $service->query->sql("SELECT * FROM $tableId");

    $rows=$queryResult->getRows();
    var_dump($rows);
   
    echo "ID: " . $tableId;


?>