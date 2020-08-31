<?php
include 'typeAction.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="menu.css" />
    </head>
    <body>
        <div class="maindiv"> 
            <div class="headdiv">
                <?php include 'header.php'; ?>
            </div>
            <div class="middle_div">
                <div class="middle_div_left">
                    <?php include 'leftMenu.php'; ?>                   
                </div>
                <div class="middle_div_right">
                    <form action="registrationAction.php" method="POST">
                        <table style="margin: auto;line-height: 2.5em;">
                            <tr>
                                <td class="login_table_heading"><span style="padding-left: 83px;">Registration</span></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Enter Name" name="name" class="input_text"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Enter Mobile" maxlength="10" name="mobileNo"  class="input_text"></td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Enter Email"  name="emailId" class="input_text"></td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="type" class="input_text">
                                        <option value="">-------Select Type------</option>
                                        <option>RETAIL CUSTOMER</option>
                                        <option>WHOLESALE CUSTOMER</option>
                                        <!--?php>
                                      /*  while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value='.$row['typeId'].'>'.$row['name'].'</option>';
                                        }
                                        ?-->                                       
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" placeholder="Enter Login Id"  name="loginId" class="input_text"></td>
                            </tr>
                            <tr>
                                <td><input type="password" placeholder="Enter Password"  name="password" class="input_text"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Register" class="login_btn">
                                    <input type="Reset" value="Cancel" class="cancel_btn">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="footer_div">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>