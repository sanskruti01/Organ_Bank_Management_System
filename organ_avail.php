<?php
session_start();
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "mydb");
$blood_group = "";
$height = "";
$weight = "";


?>

<!DOCTYPE html>
<html>

<head>

    <title>Login for Hospital</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
        #side_bar {
            background-color: whitesmoke;

            padding: 50px;
            width: 300px;
            height: 450px;
        }
        table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

table.center {
  margin-left: 10px; 
  margin-right: auto;
}

    </style>
</head class="Hospital Dashboard">

<body>
    <nav class="navbar navbar-expand-lg navbar-dar bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">

                <a class="navbar-brand" href="">
                    <font style="color:aliceblue">Sanjeevani Organ Donation and Transplantation</font>
                </a>

            </div>
            <span><strong></strong></span>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <font style="color:aliceblue">My Profile</font>
                    </a>
                    <div class='dropdown-menu'>
                        <a class="dropdown-item" href="view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">
                        <font style="color:aliceblue">Logout</font>
                    </a>
                </li>
            </ul>

        </div>
    </nav><br><br>
    <center>
    <h1>Search organ details </h1></center>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="" method="post">


                <div class="form-group">
                    <label>Organ Name:</label>
                    <input type="text" class="form-control" name="o_name">
                </div>
                <div class="form-group">
                    <label>Part or Side:</label>
                    <input type="text" class="form-control" name="part">
                </div>


                <button class="btn btn-primary" name="search">Search</button>
            </form><br>
            <div style="overflow-x:auto;">

                <table class="center">
                    <caption>
                    <tr>
                        <th>Blood Group</th>
                        <th>Height</th>
                        <th>Weight</th>

                    </tr>

                    <?php
                    if (isset($_POST["search"]))
                        $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "mydb");
                    $query =  "call Organ_data('$_POST[o_name]','$_POST[part]')";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        $blood_group = $row['blood_group'];
                        $height = $row['height'];
                        $weight = $row['weight'];



                    ?>
                        <tr>
                            <td><?php echo $blood_group; ?></td>
                            <td><?php echo $height; ?></td>
                            <td><?php echo $weight; ?></td>


                        </tr>
                    <?php
                    }
                    ?>
                    </caption>
                </table>

            </div>
</body>

</html>