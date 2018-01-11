/*
Please, write your SQL query here.
*/

SELECT first_name, last_name, count(id) AS pairs FROM `customers` GROUP BY first_name, last_name HAVING COUNT(*) > 1