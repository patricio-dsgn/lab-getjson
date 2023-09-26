<?php
$jsonFile = './data/data.json'; // Reemplaza 'archivo.json' con la ruta de tu archivo JSON
$jsonData = file_get_contents($jsonFile);

$jsonArray = json_decode($jsonData, true);
print_r($jsonArray);

echo 'hello';
?>