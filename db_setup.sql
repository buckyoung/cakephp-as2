USE bcy3db;
DROP TABLE IF EXISTS users;
CREATE TABLE users(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password TEXT,
created DATETIME,
modified DATETIME
);

DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id INT UNSIGNED,
title VARCHAR(50),
body TEXT,
rating INT UNSIGNED,
media VARCHAR(50),
created DATETIME,
modified DATETIME
);