// Fetch the data from the server using AJAX
function fetchCartData() {
    $.ajax({
        url: 'server/cart/fetch_cart_items.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            // Update the quantity and price elements
            const qtyElement = document.querySelector('.qty');
            const priceElement = document.querySelector('.fw-bold');
            const totalElement = document.querySelector('.price');

            qtyElement.textContent = `${data.length} Producto`;
            priceElement.textContent = `$${data.reduce((acc, item) => acc + item.price * item.quantity, 0).toFixed(2)}`;
            totalElement.textContent = `$${data.reduce((acc, item) => acc + item.price * item.quantity, 0).toFixed(2)}`;

            // Add the "animate" class to trigger the animation
            qtyElement.classList.add('animate');
            priceElement.classList.add('animate');
            totalElement.classList.add('animate');

            // Remove the "animate" class after the animation is complete
            setTimeout(() => {
                qtyElement.classList.remove('animate');
                priceElement.classList.remove('animate');
                totalElement.classList.remove('animate');
            }, 1000);
            return data;
        },
        error: function (error) {
            console.log(error);
        }
    });
}

// Fetch the cart data every 500 mili seconds
//setInterval(fetchCartData, 500);

export default fetchCartData;
