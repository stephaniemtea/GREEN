CREATE TABLE discounts (
    discount_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    discount_name VARCHAR(100) NOT NULL,
    discount_description VARCHAR(255) NOT NULL,
    discount_start_date DATE NOT NULL,
    discount_end_date DATE NOT NULL,
    online_exclusive CHAR(1) NOT NULL
);
