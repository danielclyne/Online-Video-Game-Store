CREATE DATABASE g00249137;

CREATE TABLE products (
productId INT NOT NULL AUTO_INCREMENT,
productImage TEXT NOT NULL,
productName TEXT NOT NULL,
productDescription TEXT NOT NULL,
productPreviousPrice FLOAT NOT NULL,
productCurrentPrice FLOAT NOT NULL,
productTrailer TEXT,
starRating TEXT,
numPlayers TEXT,
PRIMARY KEY (productId));

INSERT INTO products (productImage, productName, productDescription, productpreviousPrice, productcurrentPrice, productTrailer, starRating, numPlayers) VALUES
('images/products/callOfDutyBlackOpsColdWar.jpg', 'Call of Duty', 'This is a very good game!', 70, 60, 'https://www.youtube.com/embed/aTS9n_m7TW0',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>'),
('images/products/residentEvilVillage.jpg', 'Resident Evil', 'This game is scary!', 60, 55, 'https://www.youtube.com/embed/CNpIfP4vtrE',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>',
'<i class="fas fa-gamepad"></i>'),
('images/products/returnal.jpg', 'Returnal', 'This game is very difficult!', 80, 65, 'https://www.youtube.com/embed/k4nSLa8a588',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>'),
('images/products/thePathless.jpg', 'The Pathless', 'This game has a great story!', 45, 35, 'https://www.youtube.com/embed/4m73BSovpEc',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>'),
('images/products/demonssouls.jpg', 'Demons Souls', 'You will love this game!', 50, 40, 'https://www.youtube.com/embed/2TMs2E6cms4',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>',
'<i class="fas fa-gamepad"></i>'),
('images/products/ratchetClank.jpg', 'Ratchet & Clank', 'This game is for children!', 60, 55, 'https://www.youtube.com/embed/9p_gg9UW9k4',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>'),
('images/products/spiderman.jpg', 'Spider Man', 'This game is webtastic!', 50, 45, 'https://www.youtube.com/embed/NTunTURbyUU',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>'),
('images/products/fifa21.jpg', 'Fifa 21', 'This game is for football fans!', 40, 20, 'https://www.youtube.com/embed/Jmliox1trPQ',
'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>',
'<i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i> <i class="fas fa-gamepad"></i>');

CREATE TABLE users (
userId INT NOT NULL AUTO_INCREMENT,
userRealName TEXT NOT NULL,
userEmail TEXT NOT NULL,
username TEXT NOT NULL,
userPassword TEXT NOT NULL,
PRIMARY KEY (userId));