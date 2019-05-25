<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("formData.xml");

    $identifier= $xmlDoc->getElementsByTagName("identifier")->item(0)->textContent;

 echo $identifier;
    $sender= $xmlDoc->getElementsByTagName("sender")->item(0)->textContent;
echo $sender;
    $sent= $xmlDoc->getElementsByTagName("sent")->item(0)->textContent;
echo $sent;
    $status= $xmlDoc->getElementsByTagName("status")->item(0)->textContent;
echo $status;
    $scope= $xmlDoc->getElementsByTagName("scope")->item(0)->textContent;
echo $scope;
    $category= $xmlDoc->getElementsByTagName("category")->item(0)->textContent;
echo $category;
    $event= $xmlDoc->getElementsByTagName("event")->item(0)->textContent;
echo $event;
    $urgency= $xmlDoc->getElementsByTagName("urgency")->item(0)->textContent;
echo $urgency;
    $severity= $xmlDoc->getElementsByTagName("severity")->item(0)->textContent;
echo $severity;
    $certainty= $xmlDoc->getElementsByTagName("certainty")->item(0)->textContent;
echo $certainty;
    $description= $xmlDoc->getElementsByTagName("description")->item(0)->textContent;
echo $description;
    $areaDesc= $xmlDoc->getElementsByTagName("areaDesc")->item(0)->textContent;
echo $areaDesc;
    $location= $xmlDoc->getElementsByTagName("circle")->item(0)->textContent;
echo $location;

$tableId="1XzCdXqTdesLPYPokaDNUhfQlV8PMfFHqcs5McxHT";
 $coordinates=explode(',',$location);
echo $coordinates[0];
echo $coordinates[1];
echo "gfbgfnsgfn";
echo $identifier;
echo "<br>";
$sqlInsert=  " '". $identifier . "' , '" . $sender . "','" . $sent . "','" . $status 
             ."' , '". $scope . "','" . $category . "','" . $event . "','" . $urgency . "','"  
             . $severity . "','" . $certainty . "','" . $description . "','" . 
             $areaDesc . "','" . $coordinates[0]. "','" . $coordinates[1] . "'";
echo "INSERT INTO " . $tableId ." VALUES (". $sqlInsert .")" ;
    ?>
    