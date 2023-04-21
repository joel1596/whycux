-- insert some categories
INSERT INTO categories (name) VALUES ('Hombres');
INSERT INTO categories (name) VALUES ('Mujeres');
INSERT INTO categories (name) VALUES ('Niños');

-- insert some users
INSERT INTO users (username, password, email) VALUES ('john', 'password1', 'john@example.com');
INSERT INTO users (username, password, email) VALUES ('jane', 'password2', 'jane@example.com');
INSERT INTO users (username, password, email) VALUES ('bob', 'password3', 'bob@example.com');

-- insert some products
INSERT INTO products (name, description, price, category_id) VALUES ('Camiseta para Hombre', '100% Algodón, Cuello Redondo, Manga Corta', 19.990, 1);
INSERT INTO products (name, description, price, category_id) VALUES ('Vestido para Mujer', 'Estampado Floral, Escote en V, Manga Larga', 39.990, 2);
INSERT INTO products (name, description, price, category_id) VALUES ('Jeans para Niños', 'Corte Ajustado, Cintura Ajustable, Cinco Bolsillos', 29.990, 3);
INSERT INTO products (name, description, price, category_id) VALUES ('Sudadera con Capucha para Hombre', 'Mezcla de Algodón/Poliéster, Capucha con Cordón, Bolsillo Canguro', 49.990, 1);
INSERT INTO products (name, description, price, category_id) VALUES ('Falda para Mujer', 'Denim, Corte A, Botones al Frente', 29.990, 2);
INSERT INTO products (name, description, price, category_id) VALUES ('Camiseta para Niños', 'Mezcla de Algodón/Poliéster, Cuello Redondo, Manga Corta', 14.990, 3);
INSERT INTO products (name, description, price, category_id) VALUES ('Jeans para Hombre', 'Corte Recto, Cinco Bolsillos, Cierre con Cremallera', 59.990, 1);

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
INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (1, 4, 2);
INSERT INTO cart_items (cart_id, product_id, quantity) VALUES (2, 2, 1);