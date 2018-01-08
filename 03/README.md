# Challenge 03 - MySQL

## Database Structure
You are given one table:

```mysql
CREATE TABLE customers (
  id INT NOT NULL PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL
);
```

## Problem Statement
Find all the customers whose first and last names are not unique in our database, as well as the number of times each first and last name pair appears in our database.
