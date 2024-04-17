<?php

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "studdb";

$conn = new mysqli($severname, $username, $password, $db_name);

if($conn->connect_errno){
    die("Connection failed: ". $conn->connect_error);
}

?>