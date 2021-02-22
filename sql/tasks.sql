CREATE TABLE tasks(
	task_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    	task_name VARCHAR(100) NOT NULL,
    	task_desc VARCHAR(255) NOT NULL,
    	task_type VARCHAR(6) NOT NULL,
	task_num_points INT NOT NULL,
	task_progress CHAR(1) NOT NULL
);

INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Measure your current carbon footprint', 'Use an online calculator to find out what your current carbon footprint is and research what contributes to your carbon footprint.', 'daily', 50, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Reduce the amount of packaging you handle', 'Keep track of all the plastic packaging you handle and try to reduce that amount.', 'weekly', 100, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Plant a tree', 'Research and find a tree planting organization you like. Then, either donate to them or personally buy a tree from them.', 'daily', 50, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Unplug for a couple hours', 'Even when your devices are idle, they are still consuming electricity. Take some time to unplug your devices and disconnect.', 'daily', 50, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Clean up a park or local area', 'Go on a walk and clean up your local area. Pick up trash and leave it better than you found it.', 'daily', 50, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Read any article about the Earth', 'Read any article about the wonderful planet you live on and be inspired to do what you can for the planet.', 'daily', 50, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Reduce your shower time by two minutes', 'Measure how long your average shower is and try to reduce it by two minutes. By doing so, you can save between 2.5 gallons to 5 gallons of water per day', 'weekly', 100, 'I');
INSERT INTO tasks (task_name, task_desc, task_type, task_num_points, task_progress) VALUES ('Keep track of how much trash you produce this week', 'For the first three days, put all the trash you produce in one part of your house. Then for the next three days, work on reducing that amount.', 'weekly', 100, 'I');
