CREATE TABLE photoOfTheDays(
	photo_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    photo_name VARCHAR(100) NOT NULL,
    photo_desc VARCHAR(255) NOT NULL,
    photo_artistid VARCHAR(20) NOT NULL,
	photo_artistname VARCHAR(50) NOT NULL,
	photo_post_date DATE NOT NULL,
	photo_url VARCHAR(255) NOT NULL,
	FOREIGN KEY (photo_artistid) REFERENCES addresses(user_id),
	FOREIGN KEY (photo_artistname) REFERENCES addresses(user_name)
);

