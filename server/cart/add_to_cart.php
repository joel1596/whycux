<?php

require_once '../../DAL/cart.php';
require_once '../../DAL/cart_item.php';


$id = $_POST['id'];
$id = intval($id);

$cart_id = $_POST['cart_id'];
//$cart_id = intval($cart_id);

$product_id = $id;
$addNQuantity = 1;
if (addToCart($cart_id, $product_id, $addNQuantity)) {
    $cart_items = getAllCartItemsByCartId($cart_id);
    //echo $cart_items;
    echo json_encode($cart_items);
    // echo 'success';
} else {
    echo 'fail';
}
