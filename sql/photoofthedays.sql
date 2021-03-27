CREATE TABLE photoOfTheDays(
	photo_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    photo_name VARCHAR(100) NOT NULL,
    photo_desc VARCHAR(255) NOT NULL,
    photo_artist_username VARCHAR(255) NOT NULL,
	photo_post_date DATE NOT NULL,
	photo_url VARCHAR(255) NOT NULL,
	FOREIGN KEY (photo_artist_username) REFERENCES users(username),
);

INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedaySA20191210', 'This photo was taken in Ninh Binh, Vietnam and it constantly reminds me to live simply and do my part, even if it''s small.', 'system_admin', '2019-12-10', 'https://images.unsplash.com/photo-1575986767340-5d17ae767ab0?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1491&q=80');
INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedaySA20180903', 'It''s easy to replace single-use plastic bags when these reusable bags are so pretty.', 'system_admin', '2019-09-03', 'https://images.unsplash.com/photo-1535984052160-77931dbfe0d5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80');
INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedaySA20180111', 'It''s so important to know where your food comes from and to make sure you are supporting companies that treat their workers fairly.', 'system_admin', '2018-01-11', 'https://images.unsplash.com/photo-1515694590185-73647ba02c10?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80');
INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedaySA20170917', 'Riding a bike releases very little to no extra carbon emissions, which makes it a healthier and sustainable form of transportation, especially for shorter distances.', 'system_admin', '2017-09-17', 'https://images.unsplash.com/photo-1571068316344-75bc76f77890?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
INSERT INTO photoOfTheDays(photo_name, photo_desc, photo_artist_name, photo_post_date, photo_url) VALUES ('photoofthedaySA20190826', 'Growing plants indoors purifies the air and makes you feel healthier and more motivated.', 'system_admin', '2019-08-26', 'https://images.unsplash.com/photo-1566836610827-e2a98b312ec2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

