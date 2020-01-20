CREATE DATABASE myoja;

  USE myoja;

  CREATE TABLE brands (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    brand_name VARCHAR(30) NOT NULL,
    brand_description VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
  );

  INSERT INTO brands(id, brand_name, brand_description)
  VALUES
    (1, "Samsung", "A whole new World"),
    (2, "LG", "Life is Good"),
    (3, "Apple inc", "In a class of its own"),
    (4, "Binatone", "Reliably strong"),
    (5, "Microsoft", "Makes work easier");
    
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