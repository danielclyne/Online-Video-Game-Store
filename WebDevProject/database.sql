CREATE DATABASE g00249137;

CREATE TABLE products (
productId INT NOT NULL AUTO_INCREMENT,
productImage TEXT NOT NULL,
productName TEXT NOT NULL,
productDescription TEXT NOT NULL,
productPreviousPrice FLOAT NOT NULL,
productCurrentPrice FLOAT NOT NULL,
productTrailer TEXT,
PRIMARY KEY (productId));

INSERT INTO products (productImage, productName, productDescription, productpreviousPrice, productcurrentPrice, productTrailer) VALUES
('images/products/callOfDutyBlackOpsColdWar.jpg', 'Call of Duty', 'This is a very good game!', 69.99, 59.99, 'https://www.youtube.com/embed/aTS9n_m7TW0'),
('images/products/residentEvilVillage.jpg', 'Resident Evil', 'This game is scary!', 59.99, 54.99, 'https://www.youtube.com/embed/CNpIfP4vtrE'),
('images/products/returnal.jpg', 'Returnal', 'This game is very difficult!', 79.99, 64.99, NULL),
('images/products/thePathless.jpg', 'The Pathless', 'This game has a great story!', 45.99, 34.99, NULL),
('images/products/demonssouls.jpg', 'Demons Souls', 'You will love this game!', 49.99, 39.99, NULL),
('images/products/ratchetClank.jpg', 'Ratchet & Clank', 'This game is for children!', 59.99, 54.99, NULL),
('images/products/spiderman.jpg', 'Spider Man', 'This game is webtastic!', 49.99, 44.99, Null),
('images/products/fifa21.jpg', 'Fifa 21', 'This game is for football fans!', 39.99, 19.99, Null);

CREATE TABLE users (
userId INT NOT NULL AUTO_INCREMENT,
userRealName TEXT NOT NULL,
userEmail TEXT NOT NULL,
username TEXT NOT NULL,
userPassword TEXT NOT NULL,
PRIMARY KEY (userId));