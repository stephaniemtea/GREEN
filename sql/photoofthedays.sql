CREATE TABLE photoOfTheDays(
	photo_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    photo_name VARCHAR(100) NOT NULL,
    photo_desc VARCHAR(255) NOT NULL,
    photo_artist_username VARCHAR(255) NOT NULL,
	photo_post_date DATE NOT NULL,
	photo_url VARCHAR(255) NOT NULL,
	FOREIGN KEY (photo_artist_id) REFERENCES users(username),
);

INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedayU120191210', 'I took this photo in Ninh Binh, Vietnam and it constantly reminds me to live simply and do my part, even if it''s small.', 'gt231', '2019-12-10', 'https://images.unsplash.com/photo-1575986767340-5d17ae767ab0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1491&q=80');
