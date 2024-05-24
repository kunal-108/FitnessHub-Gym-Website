<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ignou_project";

//Connetion
$connection = mysqli_connect($host, $username, $password, $database);

//Check Connetion
if (!$connection) {
    header("Location : ../errors/db.php");
    die();
}

?>