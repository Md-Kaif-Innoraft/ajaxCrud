<?php

// Include ConnectDb.php file for database connection.
include 'ConnectDb.php';

// Taking data from post.
$id = $_POST['id'];

// Sql Query to delete data from database.
$deletieSql ="DELETE FROM `crudajax` WHERE `id` = $id";

// Run sql query to delete data from database.
$statement = $conn->prepare($deletieSql);
// Execute query.
$statement->execute();
