<?php
require_once 'pdoconfig.php';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn){
    die("Could not connect to the database $dbname :" . mysqli_connect_error());
} else {
    //echo "Connected to $dbname at $host successfully.";
}