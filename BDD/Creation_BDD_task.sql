CREATE DATABASE task CHARSET utf8mb4;
USE task;

CREATE TABLE users(
id_users INT PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(50) NOT NULL ,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL 
)ENGINE=innoDB;

CREATE TABLE task(
id_task INT PRIMARY KEY AUTO_INCREMENT,
title VARCHAR(50) NOT NULL ,
description VARCHAR(255),
created_at DATETIME NOT NULL,
end_date DATETIME NOT NULL,
status BOOLEAN NOT NULL,
id_users INT NOT NULL,
FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE
)ENGINE=innoDB;

CREATE TABLE category(
id_category INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(50) NOT NULL UNIQUE
)ENGINE=innoDB;

CREATE TABLE task_category(
id_task INT NOT NULL,
id_category INT NOT NULL,
FOREIGN KEY (id_task) REFERENCES task(id_task),
FOREIGN KEY (id_category) REFERENCES category(id_category),
PRIMARY KEY (id_task, id_category)
)ENGINE=innoDB;
