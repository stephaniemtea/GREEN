CREATE TABLE discounts (
    discount_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	discount_brand VARCHAR(100) NOT NULL,
    discount_name VARCHAR(100) NOT NULL,
    discount_description VARCHAR(255) NOT NULL,
    discount_start_date DATE NOT NULL,
    discount_end_date DATE NOT NULL,
    online_exclusive CHAR(1) NOT NULL
);

INSERT INTO discounts (discount_name, discount_description, discount_start_date, discount_end_date, online_exclusive) VALUES ('STOJO', '10% OFF YOUR ORDER', 'Use code STOJOCARTF4TVQN3N at checkout within the next 24 hours', '03-16-2021', '03-17-2021', 'Y');
INSERT INTO discounts (discount_name, discount_description, discount_start_date, discount_end_date, online_exclusive) VALUES ('Keep Nature Wild', '20% OFF EVERYTHING GREEN', 'Use code GREEN at checkout to get 20% off of everything green', '03-13-2021', '03-17-21', 'Y');
INSERT INTO discounts (discount_name, discount_description, discount_start_date, discount_end_date, online_exclusive) VALUES ('Goodfair', '35% OFF SITEWIDE', 'Use code FLASH35 at checkout to enjoy 35% off everything on our site for the next 24 hours', '03-16-2021', '03-17-2021', 'Y');