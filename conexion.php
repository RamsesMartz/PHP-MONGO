<?php
	
	require_once __DIR__ . '/vendor/autoload.php';
    $alumnos = (new MongoDB\Client)->mydb->alumnos; 
	
?>