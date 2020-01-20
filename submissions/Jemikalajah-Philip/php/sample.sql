CREATE DATABASE addProducts;
use addProducts;

CREATE TABLE brands (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR(30) NOT NULL

);

CREATE TABLE products(
    id INT UNSIGNED AUTO_INCREMENT,
    itemname VARCHAR(30) NOT NULL,
    quantity INT(3),
    brand_id INT(11) UNSIGNED NOT NULL,
    manufacturer VARCHAR(100),
    about VARCHAR(200) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE CASCADE,
    date TIMESTAMP
);

INSERT INTO brands(brand_name)
 VALUES
 ('Select your brand'),
('Samsung'),
('Tecno'),
('Gucci'),
('LG'),
('Oppo');

