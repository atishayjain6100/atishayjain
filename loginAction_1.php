<?php

include 'DBConnection.php';
$loginId = $_REQUEST['loginId'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM USER WHERE loginId='$loginId' AND password='$password'";
$result = mysqli_query($conn,$sql);//Excute Query
$loginData = mysqli_fetch_assoc($result);//fetch data from mysqli object
if(!empty($loginData)){
    $_SESSION['loginId'] = $loginData['userId'];
    $_SESSION['loginName'] = $loginData['name'];
    header("Location:home.php?msg=Login Successfull");
}else{
    header("Location:login.php?msg=Invalid login Id or Password");
}
?>
