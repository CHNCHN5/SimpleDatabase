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

$sql = "UPDATE tbl_students SET studID='$studID', lname='$lname', fname='$fname', mname='$mname', course='$course', year_level='$year_level', town='$town', province='$province' WHERE studID='$studID'";

$conn->query($sql);

header('location:datalang.php');

?>