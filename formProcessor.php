<?php
$xml = file_get_contents('php://input');

$file = fopen('formData.xml', 'r+');
fwrite($file, $xml);
fclose($file);

$xmlDoc = new DOMDocument();
$xmlDoc->load("formData.xml");
$parse = $xmlDoc->documentElement;
foreach ($parse->childNodes as $item) {

    if ($item->childNodes) {
        foreach ($item->childNodes as $item2) {

            echo '<p>' . $item2->nodeValue . '</p>';
        }
    } else
        echo '<p>' . $item->nodeValue . '</p>';
}
