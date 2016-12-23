<?php
session_start();
$myname = $_SESSION['myname'];
// The session_unset() function unregisters a session variable.
session_unset();
session_destroy();
echo "Session destroyed!";
?>
<html>
    <head>
        <title>Session </title>
    </head>
    <body>
        <br />
        <a href="sessionstart.php">Start Session </a>
    </body>
</html>
