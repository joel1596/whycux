<?php

require_once '../include/functions/getRequests.php';

$nombre = recogePost("nombre");
$apellidos = recogePost("apellidos");
$correo = recogePost("correo");
$ciudad = recogePost("ciudad");
$mensaje = recogePost("mensaje");


$nombreOK = false;
$apellidosOK = false;

$errores = [];

if($nombre === ""){
    $errores[] = "No se digito el nombre de la persona";
}else {
    $nombreOK = true;
}

$apellidosOK = true;


if($nombreOK && $apellidosOK){
    require_once '../DAL/Datos1.php';
    if (Ingresa($nombre, $apellidos, $correo, $ciudad, $mensaje)){
        header("Location: ../index.php");
    }
}

?>