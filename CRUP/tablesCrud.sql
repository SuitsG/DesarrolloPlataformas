

CREATE TABLE books(
    id INT AUTO_INCREMENT,
    nameBook VARCHAR(255),
    authorId INT,
    publisherId INT,
    PRIMARY KEY (id, authorId, publisherId),
    FOREIGN KEY (authorId) REFERENCES authors(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (publisherId) REFERENCES publishers(id) ON DELETE CASCADE ON UPDATE CASCADE    
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

