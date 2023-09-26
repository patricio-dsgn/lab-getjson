<?php
// Paso 1: Leer el archivo JSON
$jsonFile = './data/data.json'; // Reemplaza 'archivo.json' con la ruta de tu archivo JSON
$jsonData = file_get_contents($jsonFile);

if ($jsonData === false) {
    die('No se pudo abrir el archivo JSON.');
}

// Paso 2: Decodificar el JSON
$jsonArray = json_decode($jsonData, true);

// if ($jsonArray === null) {
//     die('Error al decodificar el JSON.');
// }
print_r($jsonArray)
// Paso 3: Mostrar el contenido
// echo 'Contenido del JSON:<br>';
// foreach ($jsonArray as $key => $value) {
//     echo $key . ': ' . $value . '<br>';
// }
?>