<?php

function Conecta()
{
    // require_once '../vendor/autoload.php'; // Load Composer autoloader

    // $dotenv = Dotenv\Dotenv::createImmutable('../.env');
    // $dotenv->load();
    //import the dotenv library
    require_once __DIR__ . '/../vendor/autoload.php';

    //load .env file using Dotenv
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
    // access environment variables
    $db_host = $_ENV['DB_HOST'];
    $db_name = $_ENV['DB_NAME'];
    $db_user = $_ENV['DB_USER'];
    $db_pass = $_ENV['DB_PASS'];
    //1. Establecer la conexión con el motor de base de datos y seleccionar la base de datos que  vamos a utilizar cuando trabajamos DML
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conexion) {
        echo "Ocurrió un error al establecer la conexión: " . mysqli_connect_error();
    }

    return $conexion;
}

function Desconecta($conexion)
{
    //4. Cerrar la conexion
    mysqli_close($conexion);
}
