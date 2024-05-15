<?php

// Include ConnectDb.php file for database connection.
include './ConnectDb.php';

// Taking data from post.
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// Sql Query to insert data into database.
$insertSql = "INSERT INTO `crudajax` ( `name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
// Prepare query.
$statement = $conn->prepare($insertSql);
// Execute query.
$statement->execute();
