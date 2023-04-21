<?php
require_once "connection.php";

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

function filterProductsByName($name)
{

    $response =  false;
    $connection = Conecta();

    $response = $connection->query("SELECT * FROM products WHERE name LIKE '%{$name}%' LIMIT 1;");

    //error
    if ($connection->affected_rows < 1) {
        echo $connection->error;
        return false;
    }

    return $response;

    Desconecta($connection);
}

function getProductsByCartId($id)
{
    $response =  false;
    $connection = Conecta();

    $response = $connection->query("SELECT products.*
    FROM products
    JOIN cart_items ON cart_items.product_id = products.product_id
    WHERE cart_items.cart_id = '$id'");

    //error
    if ($connection->affected_rows < 1) {
        echo $connection->error;
        return false;
    }

    return $response;

    Desconecta($connection);
}
