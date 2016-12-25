<?php
include_once 'crud.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Handling CRUD Operatoins</title>
  <link href="contents/bootstrap.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div id="row" class="row">            
            <div id="form" class="col-md-4">
                <label>
                    CRUD Operations
                </label>
                <form method="post">

                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <td>
                                <?php echo (isset($_GET['edit'])) ? "Update":"Insert" ?>  Record
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Name" placeholder="Name" value="<?php if(isset($_GET['edit'])) echo $getROW['name'];  ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Email" placeholder="Email" value="<?php if(isset($_GET['edit'])) echo $getROW['email'];  ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="Mobile" placeholder="Mobile" value="<?php if(isset($_GET['edit'])) echo $getROW['mobile'];  ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
																if(isset($_GET['edit']))
																{
                                ?>
                                <button type="submit" name="update" class="btn btn-xs btn-success">update</button>
                                <?php
																}
																else
																{
                                ?>
                                <button type="submit" name="save" class="btn  btn-success">save</button>
                                <?php
																}
                                ?>
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>
        <br />
        

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
									<th colspan="2">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
								//var_dump($conn);
								$res = $conn->query("SELECT * FROM customers");
								while($row=$res->fetch_array())
								{
									
                ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['mobile']; ?>
                    </td>
                    <td>
                        <a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('sure to edit !'); " class="btn btn-xs btn-warning">edit</a>
                    </td>
                    <td>
                        <a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " class="btn btn-xs btn-danger">delete</a>
                    </td>
                </tr>
                <?php
								}
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>
