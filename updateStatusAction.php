<?php
include 'DBConnection.php';

$userId = $_REQUEST['userId'];
$sql  = "UPDATE USER SET
            status=1 
            WHERE userId='$userId'";
mysqli_query($conn, $sql);
header("Location:studentListAction.php");
?>
