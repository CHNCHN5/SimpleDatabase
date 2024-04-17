<?php

include('conn.php');

$studID = $_GET['studID'];
$sql = "DELETE FROM tbl_students WHERE studID='$studID'";
$conn->query($sql);

header('location:datalang.php');

?>

<?php

include('log.php');

$studID = "studID";
$stmt = $conn->prepare("SELECT * FROM sl_students WHERE studID=?");
$stmt->execute([$studID]); 
$user = $stmt->fetch();
if ($user) {
    echo 'found';
} else {
    echo 'not found';
} 

?>