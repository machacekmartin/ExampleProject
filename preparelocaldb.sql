CREATE DATABASE example;

CREATE TABLE images(
	id int NOT NULL AUTO_INCREMENT,
	header varchar(50),
	date datetime,
	filename varchar(150),
	PRIMARY KEY(id)
);

CREATE TABLE posts(
	id int NOT NULL AUTO_INCREMENT,
	header varchar(50),
	date datetime,
	content varchar(100),
	PRIMARY KEY(id)
);