import fetchCartData from '../navbar/navbar.js';
$(document).ready(function () {
    $('.cart').click(function () {
        var id = $(this).data('id');
        var cart_id = $(this).data('cart_id');
        console.log('cart_id', cart_id);
        console.log('id', id);
        $.ajax({
            url: 'server/cart/add_to_cart.php',
            type: 'POST',
            data: {
                id: id,
                cart_id: cart_id
            },
            success: function (data) {
                console.log(data);
                //chek if data is an array of objects
                if (data.length > 0) {
                    //data is an array of objects, find the product that was just added to the cart
                    console.log('data is not empty');
                    const idToFind = id;
                    const product = findProductById(data, idToFind)['name'];
                    const subtotal = JSON.parse(data).reduce((acc, item) => acc + item.price * item.quantity, 0).toFixed(2);

                    swal({
                        title: "Product added to cart!",
                        text: `${product} has been added to your cart. Subtotal: $${subtotal}.`,
                        icon: "success",
                        button: "OK",
                    });
                    fetchCartData();
                    return true;
                } if (data.length === 0) {
                    //data is an object
                    console.log('data is empty');
                    const product = 'data';
                    const subtotal = "freeee!";

                    swal({
                        title: "Product added to cart!",
                        text: `${product} has been added to your cart. Subtotal: $${subtotal}.`,
                        icon: "success",
                        button: "OK",
                    });
                    return true;
                } else {
                    swal({
                        title: "Error!",
                        text: `Ha ocurrido un error al agregar el producto al carrito. Intente nuevamente.`,
                        icon: "error",
                        button: "OK",
                    });
                }
            },
            error: function (data) {
                alert('Error: ' + data);
            }
        });
    });
});

function findProductById(data, id) {
    let product;
    for (let i = 0; i < data.length; i++) {
        product = JSON.parse(data);
        console.log('product', product);
        console.log('id', id.toString());
        if (product[i]['product_id'] == id.toString()) {
            console.log('product', product[i]);
            return product[i];
        }
    }

    // return null; // Return null if the product is not found
}
