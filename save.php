<?php

include('conn.php');

$studID = $_POST['studID'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$course = $_POST['course'];
$year_level = $_POST['year_level'];
$town = $_POST['town'];
$province = $_POST['province'];

$sql = "INSERT INTO tbl_students VALUES('$studID', '$lname', '$fname', '$mname', '$course', '$year_level', '$town', '$province')";

$conn->query($sql);

header('location:datalang.php');
?>