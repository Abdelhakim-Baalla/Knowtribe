CREATE DATABASE Youdemy;
USE Youdemy;

CREATE TABLE categories(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR (50),
    description TEXT,
    logo VARCHAR(255)
)ENGINE=INNODB;