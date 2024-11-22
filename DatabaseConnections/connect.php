<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB";


$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("ffs ". $conn->connect_error);
}