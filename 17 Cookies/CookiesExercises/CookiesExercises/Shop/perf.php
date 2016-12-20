<html>
    <head>
        <title>Perfumes Details </title>
    </head>
    <body>
        <?php
        $logcookie = $_COOKIE['logname'];
        echo "</HEAD>";
        echo "<BODY>";
        echo "<CENTRE>";
        echo "<ALIGN='right'>";
        echo "Welcome $logcookie ";
        echo "<BR><A HREF='logout.php'>Logout</A>";
        echo "<CENTER>";
        echo "<H3> Shopper's Paradise </H3>";
        echo "<H5> Shop till you drop!!! <H5>";
        echo "<BR><A HREF='secure.php'>Back</A>";
        echo "<HR>";
        echo "<BR>";
        echo "<TABLE BORDER='1'>";
        echo "<TR ALIGN='center'>";
        echo "<TH>Code</TH>";
        echo "<TH>Name</TH>";
        echo "<TH>Price</TH>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> P003 </TD>";
        echo "<TD><A HREF=''>Charles </A></TD>";
        echo "<TD> $36.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> P008 </TD>";
        echo "<TD><A HREF=''>Maui Rain </TD>";
        echo "<TD> $37.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> P013 </TD>";
        echo "<TD><A HREF=''> Night Mist</A></TD>";
        echo "<TD> $29.00 </TD>";
        echo "</TR>";
        echo "</TABLE>";
        echo "</CENTER>";
        ?>
    </body>
</html>
