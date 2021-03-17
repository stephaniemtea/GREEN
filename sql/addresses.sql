CREATE TABLE addresses(	
    address_id INT PRIMARY KEY AUTO_INCREMENT,
    address_one VARCHAR(255) NOT NULL,
    address_two VARCHAR(255),
    city VARCHAR(100) NOT NULL,
    state CHAR(5) NOT NULL,
    zip VARCHAR(10) NOT NULL
);

INSERT INTO addresses(address_one, city, state, zip) VALUES ('1 New Saddle St.', 'Amsterdam', 'NY', 12010);