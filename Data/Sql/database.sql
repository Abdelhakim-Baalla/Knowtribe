CREATE DATABASE Youdemy;
USE Youdemy;

CREATE TABLE categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    description TEXT,
    logo VARCHAR(255)
)ENGINE=INNODB;

CREATE TABLE tags(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom  VARCHAR(35),
    description TEXT,
    logo VARCHAR(225)
)ENGINE=INNODB;

CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom  VARCHAR(35),
    description TEXT,
    logo VARCHAR(225)
)ENGINE=INNODB;

CREATE TABLE utilisateur(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(250) UNIQUE,
    password VARCHAR(150),
    phone VARCHAR(25),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(id)
)ENGINE=INNODB;