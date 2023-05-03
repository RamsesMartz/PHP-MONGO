<?php

require_once __DIR__ . '/vendor/autoload.php';

$alumno= $_POST["cnt"];
$apellido= $_POST["cty"];

$collection = (new MongoDB\Client)->mydb->alumnos;

$insertOneResult = $collection->insertOne([
    'Nombre' => $alumno,
    'Apellido' => $apellido,
    
]);

header("Location:index.php");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());

?>