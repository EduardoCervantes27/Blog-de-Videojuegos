<?php
$server = "Proyecto_BD";
$username = "root";
$password = "1234";
$database = "blogVideojuegos";

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($db);