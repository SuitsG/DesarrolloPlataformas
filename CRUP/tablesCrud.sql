

CREATE TABLE book(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nameBook VARCHAR(255)
);



CREATE TABLE author(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    city VARCHAR(255)
);