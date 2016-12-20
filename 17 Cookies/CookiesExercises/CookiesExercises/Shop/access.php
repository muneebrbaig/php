<html>
    <head>
        <title>Accessories Details </title>
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
        echo "<TD> A001 </TD>";
        echo "<TD><A HREF=''>Diamond Bracelet </A></TD>";
        echo "<TD> $96.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> A002 </TD>";
        echo "<TD><A HREF=''> Diamond Ring </TD>";
        echo "<TD> $57.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> A037 </TD>";
        echo "<TD><A HREF=''> Diamond Earrings </A></TD>";
        echo "<TD> $49.00 </TD>";
        echo "</TR>";
        echo "</TABLE>";
        echo "</CENTER>";
        ?>
    </body>
</html>
