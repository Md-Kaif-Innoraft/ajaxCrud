<?php

// Include ConnectDb.php file for database connection.
include 'ConnectDb.php';

// Taking data from post.
$id = $_POST['id'];

// Sql Query to get data from database.
$sql = "SELECT * FROM `crudajax` WHERE `id` = $id ";
// Prepare query.
$statement = $conn->prepare($sql);
// Execute query.
$statement->execute();
// Fetching data from database.
$data = $statement->fetchAll(PDO::FETCH_OBJ);

echo json_encode($data);
