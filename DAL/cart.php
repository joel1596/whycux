<?php

//Cart_items structure: cart_id, product_id, quantity
//Carts structure: cart_id, user_id
//require '../models/cart.model.php';
require_once 'connection.php';
require_once 'cart_item.php';


/**
 * It inserts a new row into the cart_items table.
 * 
 * @param cart_id 1
 * @param product_id 1
 * @param quantity 1
 * 
 * @return The result of the query.
 */
function addToCart($cart_id, $product_id, $quantity)
{
    $response = false;
    $connection = Conecta();

    if ($connection) {
        //if not exists, create a new cart, then ipdate return true if already esxits
        if (!updateItem($cart_id, $product_id, $quantity, $connection)) {
            $response = createItem($cart_id, $product_id, $quantity, $connection);
            // $response = updateItem($cart_id, $product_id, $quantity, $connection);
        }
    } else {
        print("Error: ");
    }

    return $response;

    Desconecta($connection);
}

/**
 * It creates a new cart for a user.
 * 
 * @param user_id The user's id
 * 
 * @return The result of the query.
 */
function createCart($user_id)
{
    $response = false;
    $connection = Conecta();

    $response = $connection->query("insert into carts (user_id) values ($user_id)");

    if ($response) {
        $response = getCartId($user_id, $connection->insert_id);
        $_SESSION['cart'] = $response;
    }

    return $response;

    Desconecta($connection);
}

/**
 * It gets the cart id of a user.
 * 
 * @param user_id The user's id
 * @param cart_id The user's id
 * 
 * @return The result of the query.
 */
function getCartId($user_id, $cart_id)
{
    $response = false;
    $connection = Conecta();

    $response = $connection->query("select cart_id from carts where user_id = '$user_id' and cart_id = '$cart_id'");

    if ($response->num_rows > 0) {
        $response = $response->fetch_assoc();
    }

    return $response;

    Desconecta($connection);
}
