<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link href="contents/bootstrap.css" rel="stylesheet" />
    <title>SELECT</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>PHP CRUD -- SELECT</h3>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
										include 'dbConnection.php';
										$pdo = Database::connect();
										$sql = 'SELECT * FROM customers ORDER BY id DESC';
										foreach ($pdo->query($sql) as $row) {
											echo '<tr>';
											echo '<td>'. $row['name'] . '</td>';
											echo '<td>'. $row['email'] . '</td>';
											echo '<td>'. $row['mobile'] . '</td>';
											echo '</tr>';
										}
										Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /container -->
</body>
</html>
