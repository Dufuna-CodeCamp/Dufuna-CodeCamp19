CREATE DATABASE frozen_fresh;

  USE frozen_fresh;

  CREATE TABLE brands (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    brand_name VARCHAR(30) NOT NULL,
    brand_description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
  );

  INSERT INTO brands(id, brand_name, brand_description)
  VALUES
    (1, "Fresh Sea-Food", "Flavourful Selection"),
    (2, "Fresh Meat", "Hand Cut Fresh Daily"),
    (3, "Other Favourites", "Too Much Sauce");
    
    
 CREATE TABLE products (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    itemname VARCHAR(30) NOT NULL,
    quantity INT(3),
    date TIMESTAMP,
    PRIMARY KEY (id)
 );

 ALTER TABLE products
  ADD COLUMN brand_id INT(11) UNSIGNED NOT NULL,
  ADD FOREIGN KEY fk_brand(brand_id) REFERENCES brands(id) ON DELETE CASCADE;