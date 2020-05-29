<?php 

    $conexion = new mysqli('localhost', 'test', 'Xa4]Xz3>', 'construye');
        
    if ($conexion->connect_error) {
        echo $error -> $conexion->connect_error;
    }
    //echo $conexion->ping();
    function hola(){
        echo 'hola';
    }
?>