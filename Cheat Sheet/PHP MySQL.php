<?php
###### PHP #####
include "path/to/file";
require "path/to/file";
global $var;

isset($var);
unset($var);
array_push();
count($array);
$_POST;
$_GET;
$_FILES;
$_SESSION;

$conn = new mysqli($localhost, $username, $password, $database);

$conn->connect_error;    // true or false
$conn->error;  		// string
$conn->query();  	// function to execute SQL query
$conn->prepare();	// prepare SQL query
$conn->insert_id;	// The ID of the most recent INSERT to DB

$result->fetch_assoc();	// Fetch the next row as associative array
$result->fetch_all(MYSQLI_NUM); // Fetch all rows as Associatives

$stmt->bind_param("datatypes", $value1, $value2, ...[]);
$stmt->execute();	// Execute prepared SQL query


$_FILES["tmp_name"];	// Path of uploaded file in tmp folder
$_FILES["name"];		// File Name
$_FILES["size"];		// File size in Bytes
move_uploaded_file(tmp_path, new_path_with_filename);


password_hash($text, $algorithm=null);
password_verify($text, $hashed_password);





###### SQL #######
'SELECT * FROM table_name;
SELECT col1, col2, FROM table_name;

SELECT * FROM table WHERE col = val;
SELECT * FROM table WHERE col LIKE "%val%";
SELECT * FROM table WHERE id IN (1,2,3,4,5);

SELECT table1.col1, table2.col2 FROM table1
       JOIN table2 ON table1.primaryKey = table2.foreignKey

INSERT INTO table (col1, col2) VALUES (val1, val2);

UPDATE table SET col1=val1, col2=val2 WHERE id = 3;

DELETE FROM table WHERE id = 3;




CREATE DATABASE dbname IF NOT EXISTS;

CREATE TABLE tablename IF NOT EXISTS (
	col1 DATATYPE ANY_ATTRIBUTES,
	col2 DATATYPE ANY ATTRIBUTES,
	col3 VARCHAR(limit),
	col4 INT,
	col5 INT UNSIGNED,
	col6 INT PRIMARY KEY AUTO_INCREMENT,
	col7 TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	col8 TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

	FOREIGN KEY (col5) REFERENCES another_table(somePrimaryKey);
)';
?>