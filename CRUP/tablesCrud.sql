

CREATE TABLE books(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nameBook VARCHAR(255)
);


CREATE TABLE authors(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    address VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    city VARCHAR(255)
);


CREATE TABLE publishers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    namePublisher VARCHAR(255),
    founderPublisher VARCHAR(255),
    countryPublisher VARCHAR(255)
);