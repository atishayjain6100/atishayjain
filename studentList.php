<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="menu.css" />
        <link rel="stylesheet" href="table.css" />
        <!--script src="../resources/js/jquery-1.11.2.min.js" type="text/javascript"></script-->
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
                    <table border="1" class="table_list blueTable">
                        <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Reg. Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php 
                        $i=1;
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo ($i++);?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['emailId'];?></td>
                            <td><?php echo $row['mobileNo'];?></td>
                            <td><?php echo $row['regDate'];?></td>
                            <td><?php echo ($row['status']==1)? 'Active': 'De-Active'; ?></td>
                            <td><a href="updateStatusAction.php?userId=<?php echo $row['userId']; ?>">Status Update</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <div class="footer_div">
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </body>
</html>