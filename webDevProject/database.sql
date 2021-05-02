CREATE DATABASE productsDatabase;

CREATE TABLE products (
productId INT NOT NULL AUTO_INCREMENT,
productImage VARCHAR(100) NOT NULL,
productName VARCHAR(50) NOT NULL,
productDescription TEXT NOT NULL,
previousProductPrice FLOAT NOT NULL,
currentProductPrice FLOAT NOT NULL,
PRIMARY KEY (productId));

INSERT INTO products (productImage, productName, productDescription, previousProductPrice, currentProductPrice) VALUES
('images/callOfDutyBlackOpsColdWarPS5.jpg', 'Call of Duty PS5', 'This is a very good game!', 69.99, 59.99),
('images/residentEvilVillagePS5.jpg', 'Resident Evil PS5', 'This game is scary!', 59.99, 54.99),
('images/returnalPS5.jpg', 'Returnal PS5', 'This game is very difficult!', 79.99, 64.99),
('images/thePathlessPS5.jpg', 'The Pathless', 'This game has a great story!', 45.99, 34.99);