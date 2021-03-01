CREATE TABLE users (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
   	username VARCHAR(255) NOT NULL UNIQUE,
    user_address INT NOT NULL,
	user_current_points INT,
	user_level INT, 
    FOREIGN KEY (user_address) REFERENCES addresses(address_id)
);

INSERT INTO users (first_name, last_name, email, phone, username, user_address, user_current_points, user_level) VALUES ('Giau', 'Tran', 'gt231@gmail.com', '4132046058', 'gt231', 1, 0, 0);