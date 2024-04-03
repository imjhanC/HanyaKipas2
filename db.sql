CREATE DATABASE hanyakipas CHARACTER SET utf8 COLLATE utf8_general_ci;

USE hanyakipas

CREATE TABLE user{
    `username` VARCHAR(50) NOT NULL,
    `emailaddress` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`username`).
    UNIQUE KEY `emailaddress` (`emailaddress`)
}

CREATE TABLE product{
    `pid` INT(10) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    `price`DOUBLE(4),
    `type`  VARCHAR(13),
    `stock` INT(4),
    `description` TEXT
}