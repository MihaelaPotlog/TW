<!--acest Script creaza un tabel asociat CONTULUI APLICATIEI-->
<!--//$tableId='1hP2xK_XQVRz5DlvHHUCt3z6kizml-a8hKIexrmOM';-->
<?php
require_once 'vendor\autoload.php';

putenv('GOOGLE_APPLICATION_CREDENTIALS=C:\xampp\htdocs\TW\cric-240015-02a9bceaefa0.json');
$client = new Google_Client();

$service=new Google_Service_Fusiontables($client);


$client->useApplicationDefaultCredentials();
$client->setApplicationName("CriC");
$client->setScopes('https://www.googleapis.com/auth/fusiontables');

 

 $columns =  array('identifier' => 'STRING', 'sender' => 'STRING','sent' => "DATETIME", 'status' => 'STRING' , 'scope' => 'STRING'
                  , 'category' => 'STRING' , 'event' => 'STRING' , 'urgency' => 'STRING' , 'severity' => 'STRING' 
                  , 'certainty' => 'STRING' , 'description' => 'STRING' , 'areaDesc' => 'STRING' , 'latitude' => 'STRING' , 'longitude' => 'STRING');
    $tableColumns = array();
    foreach ($columns as $columnName => $columnType) {
            $column = new Google_Service_Fusiontables_Column();
            $column->setName($columnName);
            $column->setType($columnType);
            $tableColumns[] = $column;
        }
 $table = new Google_Service_Fusiontables_Table();
 $table->setName("alerts");
 $table->setColumns($tableColumns);
 $table->setIsExportable('true');

 $response=$service->table->insert($table);
 $tableId=$response->tableId;
echo "ID:  " . $tableId;


?>