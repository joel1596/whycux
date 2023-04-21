-- insert some categories
INSERT INTO categories (name) VALUES ('Electronics');
INSERT INTO categories (name) VALUES ('Clothing');
INSERT INTO categories (name) VALUES ('Home & Garden');

-- insert some users
INSERT INTO users (username, password, email) VALUES ('john', 'password1', 'john@example.com');
INSERT INTO users (username, password, email) VALUES ('jane', 'password2', 'jane@example.com');
INSERT INTO users (username, password, email) VALUES ('bob', 'password3', 'bob@example.com');

-- insert some products
INSERT INTO products (name, description, price, category_id) VALUES ('iPhone 12', 'A14 Bionic Chip, Super Retina XDR display, Ceramic Shield', 999.99, 1);
INSERT INTO products (name, description, price, category_id) VALUES ('Samsung Galaxy S21', 'Exynos 2100 Processor, 6.2-inch Dynamic AMOLED 2X display, Gorilla Glass Victus', 799.99, 1);
INSERT INTO products (name, description, price, category_id) VALUES ('Levi''s 501 Original Fit Jeans', '100% Cotton, Button Fly', 69.99, 2);
INSERT INTO products (name, description, price, category_id) VALUES ('KitchenAid Stand Mixer', '10-speed, 5-quart stainless steel bowl, Tilt-Head design', 399.99, 3);

-- insert some contacts
INSERT INTO contacts (name, email, message) VALUES ('Customer 1', 'customer1@example.com', 'I have a question about one of your products.');
INSERT INTO contacts (name, email, message) VALUES ('Customer 2', 'customer2@example.com', 'I received a damaged product and would like to request a refund.');

-- insert some payment methods
INSERT INTO payment_methods (name) VALUES ('Credit Card');
INSERT INTO payment_methods (name) VALUES ('PayPal');

-- insert some shopping carts
INSERT INTO carts (user_id) VALUES (1);
INSERT INTO carts (user_id) VALUES (2);

-- insert some cart items
INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (1, 1, 1);
INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (1, 2, 2);
INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (2, 3, 1);