<?php
include 'DBConnection.php';
$loginId = $_REQUEST['loginId'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM USER 
            WHERE 
            loginId='$loginId'
            AND password='$password'";
$result = mysqli_query($conn, $sql) or die();
$resultData =  mysqli_fetch_assoc($result);
if(!empty($resultData)){
    session_start();
    $_SESSION['loginName']=$resultData['name'];
    $_SESSION['loginType']=$resultData['type'];
    
    header("Location:home.php?msg=Login Successfull");
}else{    
    header("Location:login.php?msg=Invalid Login Id OR Password");
}
?>