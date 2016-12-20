<html>
    <head>
        <title>Apparel Details </title>
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
        echo "<TD> AP001 </TD>";
        echo "<TD><A HREF=''>Three piece Suit </A></TD>";
        echo "<TD> $396.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> AP012 </TD>";
        echo "<TD><A HREF=''>Wrinkle-free pant</TD>";
        echo "<TD> $157.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> AP82 </TD>";
        echo "<TD><A HREF=''> Wrinkle-free shirt </A></TD>";
        echo "<TD> $149.00 </TD>";
        echo "</TR>";
        echo "</TABLE>";
        echo "</CENTER>";
        ?>
    </body>
</html>
