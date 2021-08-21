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
                    <font style="color:aliceblue">Sanjeevani Organ Donation and Transplantation</font></a>
           
            </div>
            <span><strong></strong></span>
            <ul class="nav navbar-nav navbar-right">
            
            <li class="nav-item">
            <a class="nav-link" href="login.php"><font style="color:aliceblue">Logout</font></a>
            </li>
            </ul>

        </div>
    </nav><br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-center">
            <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link"> Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Donor </a>
                <div class="dropdown-menu">
                    <a href="add_donor.php" class="dropdown-item"> Add Donor </a>
                    <a href="manage_donor.php" class="dropdown-item"> Manage Donor </a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Recepient </a>
                <div class="dropdown-menu">
                    <a href="add_rec.php" class="dropdown-item"> Add Recepient </a>
                    <a href="manage_rec.php" class="dropdown-item"> Manage Recepient </a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Coordinators </a>
                <div class="dropdown-menu">
                    <a href="add_coor.php" class="dropdown-item"> Add Coordinators </a>
                    <a href="manage_coordinators.php" class="dropdown-item">Manage Coordinators </a>
                    
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Camps </a>
                <div class="dropdown-menu">
                    <a href="add_camp.php" class="dropdown-item"> Add Camp </a>
                    <a href="manage_camp.php" class="dropdown-item"> Manage Camps </a>
                  
                </div>
            </li>
            
            
        </ul>
    </div>
</nav><br><br>
    <center>
    <h1>Match organ details </h1></center>
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
                <div class="form-group">
                    <label>Blood Group:</label>
                    <input type="text" class="form-control" name="blood_group">
                </div>


                <button class="btn btn-primary" name="search">Search</button>
            </form><br>
            <div style="overflow-x:auto;">

                <table class="center">
                    <caption>
                    <tr>
                        <th>Organ Id</th>
                        <th>Height</th>
                        <th>Weight</th>

                    </tr>

                    <?php
                    if (isset($_POST["search"]))
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, "mydb");
                    $query =  "call matching('$_POST[o_name]','$_POST[blood_group]','$_POST[part]')";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        $o_id = $row['organ_id'];
                        $height = $row['height'];
                        $weight = $row['weight'];



                    ?>
                        <tr>
                            <td><?php echo $o_id; ?></td>
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