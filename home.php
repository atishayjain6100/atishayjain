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
                <?php include 'header.php';?>
            </div>
            <div class="middle_div">
                <div class="middle_div_left">                    
                <?php include 'leftMenu.php';?>
                </div>
                <div class="middle_div_right">
                    <center><p><b>LOGIN TO SEARCH KEYWORD</b></p></center>
                    <form action="loginAction.php" method="POST">
                    <table class="login_table">
                        <tr>
                            <td class="login_table_heading"><span style="padding-left: 83px;">Login</span></td>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Enter Login Id" name="loginId" class="input_text"></td>
                        </tr>
                        <tr>
                            <td><input type="password" placeholder="Enter Password" name="password" class="input_text"></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="pdf.php"><input type="submit" value="Login" class="login_btn"></a>
                                <input type="Reset" value="Cancel" class="cancel_btn">
                            </td>
                        </tr>
                    </table>
                        </form>
                </div>
            </div>
            <div class="footer_div">        
                <?php include 'footer.php';?>
            </div>
        </div>
    </body>
</html>