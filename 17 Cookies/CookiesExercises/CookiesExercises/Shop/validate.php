<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];
/* Enter the following code to set a cookie for logname that does
not expire for a week. The code shown earlier sets a cookie named
logname that expires as soon as the user closes the browser. The
value that gets stored in the $val variable is assigned to the
cookie. */
setcookie("logname",$val1);
/* Enter the following code to validate whether the Login Name and
Password felds are left blank: */
if ($val1=="")
{
  echo "Please enter the name!";
  echo "<HTML>";
  echo "<HEAD>";
  echo "<TITLE> Validate</TITLE>";
  echo "</HEAD>";
  echo "<BODY>";
  echo "<A HREF='login.html'> Back </A>";
  echo "</BODY>";
  echo "</HTML>";
}
else if($val2=="")
{
  echo "Please enter the password!";
  echo "<HTML>";
  echo "<HEAD>";
  echo "<TITLE> Validate</TITLE>";
  echo "</HEAD>";
  echo "<BODY>";
  echo "<BR>";
  echo "<A HREF='login.html'> Back </A>";
  echo "</BODY>";
  echo "</HTML>";
}
/* The code snippet uses the Header() function to redirect the
information to homepage.php that is the home page of the Web site. */
else
{
  Header("Location: secure.php");
}
?>