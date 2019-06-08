<?php
/**
 * Created by PhpStorm.
 * User: mihaela
 * Date: 6/4/2019
 * Time: 3:14 PM
 */
require_once '..\..\vendor\autoload.php';
class FusionTableConnection
{
   public $tableId="15MEqfjavoIeOtMKTm49ndOQ_LxmYzY0vKeMjGZff";
   function getConnection(){

       putenv('GOOGLE_APPLICATION_CREDENTIALS=..\cric-240015-02a9bceaefa0.json');
       $client = new Google_Client();

       $service=new Google_Service_Fusiontables($client);


       $client->useApplicationDefaultCredentials();
       $client->setApplicationName("CriC");
       $client->setScopes('https://www.googleapis.com/auth/fusiontables');



        return $service;

   }
   function getTableId(){
       return $this->tableId;
   }
}