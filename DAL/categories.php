<?php
require_once 'connection.php';

function getAllCategories()
{

    $response =  false;
    $connection = Conecta();

    $response = $connection->query("select * from categories");

    return $response;

    Desconecta($connection);
}

function getProductsByCategory($category_id)
{
    $response = false;
    $connection = Conecta();

    $sql = "SELECT * FROM products WHERE category_id = $category_id";
    $response = $connection->query($sql);

    Desconecta($connection);

    return $response;
}
