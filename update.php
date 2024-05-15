<?php

// Include ConnectDb.php file for database connection.
include './ConnectDb.php';

// Taking data from post.
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

// Sql Query to update data into database.
$updateSql = "UPDATE `crudajax` SET `name`= '$name', `email` = '$email', `password` = '$pass' WHERE `id` = '$id'";
// Prepare query.
$statement = $conn->prepare($updateSql);
// Execute query.
$statement->execute();
