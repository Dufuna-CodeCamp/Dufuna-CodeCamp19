CREATE DATABASE kimaj;
 USE kimaj;
 CREATE TABLE brands (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY,
  brand_name VARCHAR(30) NOT NULL,
  brand_description VARCHAR(100) NOT NULL,
);

INSERT INTO brands(id, brand_name, brand_description)
VALUES
  ("Sharp", "An interesting world"),
  ("Jump", "Life is Good"),
  ("Philip", "The stars"),
  ("Binatone", "Your best power manager"),
  ("Bedmate",  "Sleep well");

CREATE TABLE products (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  brand_id INT(11) UNSIGNED NOT NULL,
  itemname VARCHAR(30) NOT NULL,
  quantity INT(3),
  PRIMARY KEY (id),
  FOREIGN KEY (brand_id) REFERENCES brands (id) ON DELETE CASCADE,
  date TIMESTAMP,
);
