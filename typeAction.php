<?php
include 'DBConnection.php';
$sql = "SELECT * FROM type WHERE typeId!=1 ";
$result = mysqli_query($conn, $sql);
?>
