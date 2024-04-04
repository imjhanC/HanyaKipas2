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
    `productID` VARCHAR(50) NOT NULL,
    `productimage` MEDIUMBLOB,
    `productprice` VARCHAR(50) NOT NULL,
    `productname` VARCHAR(50) NOT NULL,
    `productdesc` VARCHAR(255) NOT NULL,
    `producttype` VARCHAR(50) NOT NULL
    UNIQUE KEY `productname` (`productname`).
    UNIQUE KEY `productID` (`productID`).
}