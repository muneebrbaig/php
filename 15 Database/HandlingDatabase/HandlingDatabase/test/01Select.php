<?php
include "dbConnection.php";
if(isset($_GET["ddlCountries"]))
{
  $name=$_GET["ddlCountries"];
}
else
{
  $name=1;

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SELECT</title>
    <link href="contents/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <h2>Country</h2>
    <form action="01Select.php" method="get">
        <div class="row">
            <div class="col-md-4">
                <select id="ddlCountries" name="ddlCountries" class="dropdown">
                    <?php
                    $conn = OpenCon();
                    $query = "SELECT * FROM country ";
                    $cmd = mysql_query($query, $conn);

                    while($row = mysql_fetch_row($cmd)) {
                      print(" <option value='$row[0]' ");
                      if (isset($_GET['ddlCountries']) and $_GET['ddlCountries'] === $row[0] ){
                        echo "selected='true'";
                      }
                      print(">$row[1]</option>");
                    }


                    ?>
                </select>
                <input id="btnLoadCities" type="submit" value="Load" class="btn btn-primary btn-xs" />
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-4">
            <table  class="table table-condenced table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM city where countryid = $name";
                    $cmd = mysql_query($query, $conn);
                    while($row = mysql_fetch_row($cmd))
                    {
                      print("<tr>
                <td class='auto-style2'>$row[0]</td>
                <td class='auto-style5'>$row[1]</td>
            </tr>");
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
  
</body>
</html>
