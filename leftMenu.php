<?php
session_start();
if (isset($_SESSION['loginType'])) {
    if ($_SESSION['loginType'] == '1') {
        ?>
        <ul id="Menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Manage Alumani</a></li>
            <li><a href="studentListAction.php">Manage Student</a></li>
            <li><a href="#">Manage Event</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php } else if ($_SESSION['loginType'] == '2') { ?>

        <ul id="Menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Scheduled Event</a></li>
            <li><a href="#">Maitain Event</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php } else if ($_SESSION['loginType'] == '3') { ?>

        <ul id="Menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Manage Profile</a></li>
            <li><a href="#">View Event</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php } else if ($_SESSION['loginType'] == '4') { ?>


        <ul id="Menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Manage Profile</a></li>
            <li><a href="#">View Event</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    <?php } ?>
    <?php } else {
    ?>

    <ul id="Menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
    </ul>
<?php
}?>