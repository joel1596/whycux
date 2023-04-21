<?php

function createItem($cart_id, $product_id, $quantity, $connection)
{
    $response = false;
    $query = "INSERT INTO cart_items (cart_id, product_id, quantity) VALUES ('$cart_id', '$product_id', '$quantity')";
    $response = $connection->query($query);
    if ($connection->affected_rows > 0) {
        return $response;
    } else {
        echo $connection->error;
        return false;
    }
}

function updateItem($cart_id, $product_id, $quantity, $connection)
{
    $response = false;
    $query = "UPDATE cart_items SET quantity='$quantity' WHERE cart_id='$cart_id' AND product_id='$product_id'";
    $response = $connection->query($query);
    if ($connection->affected_rows > 0) {
        return $response;
    } else {
        echo $connection->error;
        return false;
    }
}

function getAllCartItemsByCartId($cart_id)
{
    $response = false;
    $connection = Conecta();

    $response = $connection->query("SELECT products.product_id, products.name, products.description, products.price, cart_items.quantity
    FROM cart_items
    JOIN products ON cart_items.product_id = products.product_id
    WHERE cart_items.cart_id = '$cart_id';");

    //items array of the cart
    $rows = array();

    if ($response->num_rows > 0) {

        while ($row = $response->fetch_assoc()) {
            $new_row = $row;
            array_push($rows, $new_row);
        }
    }



    return $rows;

    Desconecta($connection);
}
