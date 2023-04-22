<link rel="stylesheet" type="text/css" href="components/cardProduct/card.css">
<link rel="stylesheet" type="text/css" href="components/navbar/navbar.css">
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/pimagen1.css">
<?php
require_once 'DAL/products.php';
require_once 'DAL/cart.php';
require_once 'DAL/categories.php';

//if filter category_id is not set, get all products
if (!isset($_GET['category_id'])) {
    $products = getAllProducts();
} else {
    $category_id = $_GET['category_id'];
    $products = getProductsByCategory($category_id);
}
$user_id = $_SESSION['user']['user_id'];

// $user_id = $_SESSION['user']['user_id'];
$cart = null;

if (!isset($_SESSION['cart'])) {
    $cart = createCart($user_id);
} else {
    $cart = $_SESSION['cart'];
}

$cart_id = $cart['cart_id'];

echo "<div class='container-fluid'>";
echo "<div class='row'>";

if ($products->num_rows > 0) {


    while ($row = $products->fetch_assoc()) {


        echo "<div class='col-md-4'>";

        echo  "  <div class='card mx-auto col-md-3 col-10 mt-5'>";
        echo "<img class='mx-auto img-thumbnail custom-image' src='{$row['image']}' />";
        echo  "  <div class='card-body text-center mx-auto'>";
        echo  "      <div class='cvp'>";
        echo  "          <h5 class='card-title font-weight-bold'>{$row['name']}</h5>";
        echo  "      <p class='card-text'>CRC  {$row['price']}</p>";
        echo  "       <a href='single_product.php?id={$row['product_id']}' data-id='{$row['product_id']}' class='btn details px-auto' style='background-color: #42465A; color: white;'>ver detalles</a><br />";
        echo  "        <button class='btn cart px-auto' data-id='{$row['product_id']}' data-cart_id='$cart_id'>AGREGAR EN EL CARRITO</button>";
        echo  "     </div>";
        echo  "  </div>";
        echo "  </div>";
        echo "</div>";
    }
} else {
    echo "<h1>NO HAY PRODUCTOS</h1>";
}
echo "</div>";
echo "</div>";



?>

<script type="module" src="components/cardProduct/card.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="module" src="components/navbar/navbar.js"></script>
<script type="module" src="components/categories/categories.js"></script>