CREATE TABLE challenges (
	question_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    question_name VARCHAR(255) NOT NULL,
    question_type VARCHAR(10) NOT NULL, 
);

INSERT INTO questions (question_name, question_type) VALUES ('How long was your shower yesterday or this morning? Try to keep track of how much time you spend in the shower and work on reducing that time.', 'question');
INSERT INTO questions (question_name, question_type) VALUES ('Go on a 10-15 minute walk outside today and pick up any trash you see along the way.', 'challenge');
INSERT INTO questions (question_name, question_type) VALUES ('Would you rather be the smartest person in the room or the funniest?', 'question');
INSERT INTO questions (question_name, question_type) VALUES ('If you couldn''t fail at whatever you tried, what would you try first and why?', 'question');
INSERT INTO questions (question_name, question_type) VALUES ('Download a screen tracker app and see how long you spend on your phone. It''s interesting to see how many times you turn on your phone or how long you spend on social media.', 'challenge');