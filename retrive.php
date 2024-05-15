<?php

// Include ConnectDb.php file for database connection.
include 'ConnectDb.php';

// Sql Query to get data from database.
$sql = "SELECT * FROM `crudajax`";
// Prepare query.
$statement = $conn->prepare($sql);
// Execute query.
$statement->execute();
// Fetching data from database.
$data = $statement->fetchAll(PDO::FETCH_OBJ);

echo json_encode($data);
