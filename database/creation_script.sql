CREATE TABLE products (
    product_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 3) NOT NULL,
    category_id INT(11),
    image VARCHAR(255) DEFAULT 'assets/no_image.png',
    PRIMARY KEY (product_id)
);

CREATE TABLE categories (
    category_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (category_id)
);

CREATE TABLE users (
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE contacts (
    contact_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT,
    PRIMARY KEY (contact_id)
);

CREATE TABLE carts (
    cart_id INT(11) NOT NULL AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    PRIMARY KEY (cart_id)
);

CREATE TABLE cart_items (
    cart_item_id INT(11) NOT NULL AUTO_INCREMENT,
    cart_id INT(11) NOT NULL,
    product_id INT(11) NOT NULL,
    quantity INT(11) NOT NULL,
    PRIMARY KEY (cart_item_id),
    FOREIGN KEY (cart_id) REFERENCES carts(cart_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);

CREATE TABLE payment_methods (
    payment_method_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (payment_method_id)
);

ALTER TABLE products ADD CONSTRAINT fk_category_id FOREIGN KEY (category_id) REFERENCES categories(category_id);
ALTER TABLE carts ADD CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users(user_id);