DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
id INT NOT NULL PRIMARY KEY,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL
);
INSERT INTO customers VALUES (1, 'John', 'Doe');
INSERT INTO customers VALUES (2, 'Rene', 'Keene');
INSERT INTO customers VALUES (3, 'Violet', 'Josheph');
INSERT INTO customers VALUES (4, 'Jane', 'Doe');
INSERT INTO customers VALUES (5, 'John', 'Doe');
INSERT INTO customers VALUES (6, 'John', 'Smith');
INSERT INTO customers VALUES (7, 'John', 'Smith');
INSERT INTO customers VALUES (8, 'John', 'Doe');
INSERT INTO customers VALUES (9, 'Emma', 'Meagher');
