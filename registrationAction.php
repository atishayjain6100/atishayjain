<?php

include 'DBConnection.php';

$name = $_REQUEST['name'];
$mobileNo = $_REQUEST['mobileNo'];
$emailId = $_REQUEST['emailId'];
$loginId = $_REQUEST['loginId'];
$password = $_REQUEST['password'];
$type = $_REQUEST['type'];
$status= 0;
$regDate= date('Y-m-d');
$sql = "INSERT INTO CUSTOMER(
                        name
                       ,mobileNo
                       ,emailId
                       ,loginId
                       ,password
                       ,status
                       ,regDate
                       ,type
                       )
                    VALUES(
                        '$name'
                        ,'$mobileNo'
                        ,'$emailId'    
                        ,'$loginId'    
                        ,'$password'    
                        ,'$status'    
                        ,'$regDate'    
                        ,'$type'    
                        )   ";
$conn->query($sql);

header("Location:login.php");
?>
