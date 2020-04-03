
CREATE DATABASE addProducts;
use addProducts;

CREATE TABLE brands (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR(30) NOT NULL

);

CREATE TABLE products(
    id INT UNSIGNED AUTO_INCREMENT,
    itemname VARCHAR(30) NOT NULL,
    quantity INT(3) NOT NULL,
    brand_id INT(11) UNSIGNED NOT NULL,
    manufacturer VARCHAR(100),
    about VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE CASCADE,
    date TIMESTAMP
);

INSERT INTO brands(brand_name)
 VALUES
('Samsung'),
('Tecno'),
('Gucci'),
('LG'),
('Oppo');

CREATE DATABASE up4naija;
use up4naija;

CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    email VARCHAR(40) NOT NULL,
    gender CHAR(7) NOT NULL,
    phonecode INT NOT NULL,
    phone VARCHAR(11) NOT NULL,
    checkbox CHAR(1) NOT NULL,
    PRIMARY KEY (id),
    date TIMESTAMP

);

