<?php

function getAllProducts()
{

    $response =  false;
    $connection = Conecta();

    $response = $connection->query("select * from products");

    return $response;

    Desconecta($connection);
}

function getProductById($id)
{

    $response =  false;
    $connection = Conecta();

    $response = $connection->query("select * from products where product_id = '$id'");

    //error
    if ($connection->affected_rows < 1) {
        echo $connection->error;
        return false;
    }

    return $response;

    Desconecta($connection);
}
