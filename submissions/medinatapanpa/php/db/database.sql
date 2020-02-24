/* Creating the database named curry*/
CREATE DATABASE spices;

/* call on the created db to populate*/
USE spices;
/* create tables inside curry*/
CREATE TABLE products (
id INT 7 UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    itemname VARCHAR 30 NOT NULL,
    quantity INT 3,
    added_time TIMESTAMP
);
   CREATE TABLE brands (
    id INT 7 UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR 30 NOT NULL,
    brand_description VARCHAR 120 NOT NULL
);
  INSERT INTO brands
   ("brand_name","brand_description") VALUES
   ('Sun_dry','naturally processed'),
   ('Oven_dry','retain it freshness'),
   ('Organic','herbs in it best form'),
   ('Fresh','unprocessed');
  ALTER TABLE products 
  ADD brand_id INT 11 UNSIGNED NOT NULL,
  ADD FOREIGN KEY fk_brand(brand_id) REFERENCES brands(id);   
