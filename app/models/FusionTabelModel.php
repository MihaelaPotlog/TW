<?php
require_once '..\..\vendor\autoload.php';

require_once 'FusionTableConnection.php';

class FusionTabelModel
{  public $service;
   public $tableId;

    function __construct(){
        $fusionTableConnection=new FusionTableConnection();
        $this->tableId=$fusionTableConnection->getTableId();
        $this->service=$fusionTableConnection->getConnection();
    }
    function insertAlert(){


        $xml = file_get_contents('php://input');
        $file = fopen('formData.xml', 'w');
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
        $description=$xmlDoc->getElementsByTagName("description")->item(0)->textContent;
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

        $this->service->query->sql("INSERT INTO " . $this->tableId . $sqlInsert );
    }
    function deleteAlert()
    {
        $identifier = file_get_contents('php://input');
        $xml = file_get_contents('php://input');
        $file = fopen('formData.txt', 'w');
        fwrite($file,$identifier);
        fwrite($file,"jk");
        $sql = "DELETE from $this->tableId WHERE identifier='$identifier' ";

        $this->service->query->sql($sql);
    }

    function modifyType(){
        $identifier = file_get_contents('php://input');

        $sql = "UPDATE $this->tableId SET type='ongoing' WHERE identifier='$identifier'";

        $this->service->query->sql($sql);
    }

    function giveAlerts(){
        $queryResult=$this->service->query->sql("SELECT * FROM $this->tableId ");
        $rows=$queryResult->getRows();


        file_get_contents('php://input');
        http_response_code(200);
        $response['status']=200;
        $response['status_message']="ok";
        $response['data']=$rows;

        $json_response = json_encode($response);
        echo $json_response;


    }
    function giveIdentifiedAlert(){
        $identifier=file_get_contents('php://input');
        $file = fopen('formData.txt', 'w');
        fwrite($file, $identifier);

//        fwrite($file, "grr");
        $queryResult=$this->service->query->sql("SELECT * FROM $this->tableId where identifier='$identifier'");
        $alert=$queryResult->getRows();

        $response['status']=200;
        $response['status_message']="ok";
        $response['data']=$alert;
        $json_response = json_encode($response);
        echo $json_response;

    }

}

$fusionTable=new FusionTabelModel();

if($_GET["request"]=="alerts")
        $fusionTable->giveAlerts();
    else if($_GET["request"]=="insert")
        $fusionTable->insertAlert();
    else if($_GET["request"]== "identifiedAlert")
        $fusionTable->giveIdentifiedAlert();
    else if($_GET["request"]=="modify")
        $fusionTable->modifyType();
    else if($_GET["request"]=="delete")
        $fusionTable->deleteAlert();




?>