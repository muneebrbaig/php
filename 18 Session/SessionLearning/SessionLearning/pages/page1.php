<?php
session_start();
$_SESSION['accessTime'] = date("M/d/Y g:i:sa");
echo "This is page 1<br />";
echo "You accessed the application at: " . $_SESSION['accessTime'];
echo "<div><a href=\"page2.php\">Continue to next page</a></div>";
?>