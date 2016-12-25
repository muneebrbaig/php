<?php
include_once 'db.php';

/* code for data insert */
if(isset($_POST['save']))
{

	$Name = $conn->real_escape_string($_POST['Name']);
	$Email = $conn->real_escape_string($_POST['Email']);
	$Mobile = $conn->real_escape_string($_POST['Mobile']);

  $SQL = $conn->query("INSERT INTO customers(Name,Email,Mobile) VALUES('$Name','$Email','$Mobile')");

  if(!$SQL)
  {
		echo $conn->error;
  }
}
/* code for data insert */


/* code for data delete */
if(isset($_GET['del']))
{
	$SQL = $conn->query("DELETE FROM customers WHERE id=".$_GET['del']);
	header("Location: index.php");
}
/* code for data delete */



/* code for data update */
if(isset($_GET['edit']))
{
	$SQL = $conn->query("SELECT * FROM customers WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = $conn->query("UPDATE customers SET Name='".$_POST['Name']
		."', Email='".$_POST['Email']."', Mobile='".$_POST['Mobile']
		."' WHERE id=".$_GET['edit']);
	header("Location: index.php");
}
/* code for data update */

?>