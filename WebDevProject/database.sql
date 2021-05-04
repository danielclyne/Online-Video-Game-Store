CREATE DATABASE g00249137;

CREATE TABLE products (
productId INT NOT NULL AUTO_INCREMENT,
productImage TEXT NOT NULL,
productName TEXT NOT NULL,
productDescription TEXT NOT NULL,
previousProductPrice FLOAT NOT NULL,
currentProductPrice FLOAT NOT NULL,
PRIMARY KEY (productId));

INSERT INTO products (productImage, productName, productDescription, previousProductPrice, currentProductPrice) VALUES
('images/products/callOfDutyBlackOpsColdWarPS5.jpg', 'Call of Duty PS5', 'This is a very good game!', 69.99, 59.99),
('images/products/residentEvilVillagePS5.jpg', 'Resident Evil PS5', 'This game is scary!', 59.99, 54.99),
('images/products/returnalPS5.jpg', 'Returnal PS5', 'This game is very difficult!', 79.99, 64.99),
('images/products/thePathlessPS5.jpg', 'The Pathless', 'This game has a great story!', 45.99, 34.99);

CREATE TABLE users (
userId INT NOT NULL AUTO_INCREMENT,
userRealName TEXT NOT NULL,
userEmail TEXT NOT NULL,
username TEXT NOT NULL,
userPassword TEXT NOT NULL,
PRIMARY KEY (userId));