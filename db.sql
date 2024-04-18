CREATE DATABASE hanyakipas CHARACTER SET utf8 COLLATE utf8_general_ci;

USE hanyakipas

CREATE TABLE user (
    `username` VARCHAR(50) NOT NULL,
    `emailaddress` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`username`),
    UNIQUE KEY `emailaddress` (`emailaddress`)
);


CREATE TABLE product (
    `productname` VARCHAR(50) NOT NULL,
    `productprice` INT(11) NOT NULL,
    `productdesc` VARCHAR(255) NOT NULL,
    `producttype` VARCHAR(50) NOT NULL,
    `productqty` INT(11) NOT NULL,
    `productimage` MEDIUMBLOB,
    UNIQUE KEY `productname` (`productname`)
);



CREATE TABLE enquiry (
    `name` VARCHAR(50) NOT NULL,
    `contactnumber` VARCHAR(50) NOT NULL,
    `emailaddress` VARCHAR(50) NOT NULL,
    `enquiry` VARCHAR(50) NOT NULL,
    `subject` VARCHAR(255) NOT NULL
);


CREATE TABLE orders (
    customerName VARCHAR(50) NOT NULL,
    customerDesc VARCHAR(50) NOT NULL,
    customerShipAddress VARCHAR(250) NOT NULL,
    customerContactNum VARCHAR(50) NOT NULL,
    productPrice INT(11) NOT NULL,
    productName VARCHAR(50) NOT NULL,
    productType VARCHAR(50) NOT NULL,
    productQty INT(11) NOT NULL
);

CREATE TABLE cart (
    `productname` VARCHAR(50) NOT NULL,
    `productimage` MEDIUMBLOB,
    `productprice` INT(11) NOT NULL,
    `productqty` INT(11) NOT NULL,
    `producttype` VARCHAR(50) NOT NULL
);

CREATE TABLE admin (
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL
);

INSERT INTO `admin` (`username`, `password`) VALUES ('chengkipas', 'kipascheng1234');