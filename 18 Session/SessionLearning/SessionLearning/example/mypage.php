<?php
session_start();
$myname = $_SESSION['myname'];
?>
<html>
    <head>
        <title>Homepage </title>
    </head>
    <body>
        Welcome <?php echo $myname ?> to MyPage.com
        <br />
    <a href="sessiondestroy.php">Destroy Session </a>
    
    </body>
</html>
