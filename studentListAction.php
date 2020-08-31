<?php
include 'DBConnection.php';
$sql = "SELECT * FROM USER WHERE type=4";
$result  = mysqli_query($conn, $sql);

include 'studentList.php';
?>
