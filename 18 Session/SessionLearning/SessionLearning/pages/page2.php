<?php
session_start();
if (!isset($_SESSION['accessTime'])) {
die(header("Location: page1.php"));
}
echo "This is page 2<br />";
echo "You accessed the application at: " . $_SESSION['accessTime'];
echo "<div><a href=\"page3.php\">Continue to next page</a></div>";
?>