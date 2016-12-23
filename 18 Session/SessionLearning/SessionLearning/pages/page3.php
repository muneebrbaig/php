<?php
session_start();
echo "page 3";
echo "You accessed the application at: " . $_SESSION['accessTime'];
echo "<div><a href=\"page1.php\">Back to page 1</a></div>";
?>