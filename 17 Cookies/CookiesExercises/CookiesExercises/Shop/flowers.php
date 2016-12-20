<HTML>
<HEAD>
  <TITLE> Flower Details </TITLE>
</HEAD>
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
        echo "<TD> F001 </TD>";
        echo "<TD><A HREF=''>Tulip Bouquet</A></TD>";
        echo "<TD> $6.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> F002 </TD>";
        echo "<TD><A HREF=''> Red Rose Bouque </TD>";
        echo "<TD> $7.00 </TD>";
        echo "</TR>";
        echo "<TR ALIGN='center'>";
        echo "<TD> F0021 </TD>";
        echo "<TD><A HREF=''> Lilacs </A></TD>";
        echo "<TD> $9.00 </TD>";
        echo "</TR>";
        echo "</TABLE>";
        echo "</CENTER>";
        ?>
    </body>
</html>
