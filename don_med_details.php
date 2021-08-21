<?php
    $connection = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($connection, "mydb");
    $f_name = "";
    $m_name = "";
    $l_name = "";
    $gender = "";
    $organ_name = "";
    $part_side = "";
    $blood_group = "";
    $height = "";
    $weight = "";
    
    $query = "call donor_med_det()"; 
?>

<!DOCTYPE html>
<html>

<head>
<title>Admin Dashboard</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
    #side_bar{
        background-color: whitesmoke;

        padding:50px;
        width:300px;
        height:450px;    
        }  
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        table.center {
            margin-left: 10px;
            margin-right: auto;
        } 
</style>
</head class="Admin Dashboard">
<body>
    <nav class="navbar navbar-expand-lg navbar-dar bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
            
                <a class="navbar-brand" href="login.php"> 
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
                <a  href="admin_dashboard.php" class="nav-link"> Dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Donor </a>
                <div class="dropdown-menu">
                    <a href="add_donor.php" class="dropdown-item"> Add Donor </a>
                    <a href="update_donor.php" class="dropdown-item"> Update Donor </a>
                    <a href="delete_donor.php" class="dropdown-item"> Delete Donor </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Recepient </a>
                <div class="dropdown-menu">
                    <a href="add_rec.php" class="dropdown-item"> Add Recepient </a>
                    <a href="add_rec.php" class="dropdown-item"> Update Recepient </a>
                    <a href="delete_rec.php" class="dropdown-item"> Delete Recepient </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Coordinators </a>
                <div class="dropdown-menu">
                    <a href="add_coo.php" class="dropdown-item"> Add Coordinators </a>
                    <a href="up_coo.php" class="dropdown-item"> Update Coordinators </a>
                    <a href="del_coo.php" class="dropdown-item"> Delete Coordinators </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Camps </a>
                <div class="dropdown-menu">
                    <a href="add_camp.php" class="dropdown-item"> Add Camp </a>
                    <a href="up_camp.php" class="dropdown-item"> Update Camp </a>
                    <a href="del_camp.php" class="dropdown-item"> Delete Camp </a>
                </div>
            </li>
            
        </ul>
    </div>
</nav>


<span><marquee> This is Sanjeevani Organ Donation and Transplantation </marquee></spam><br><br>

<h1> Donors' Medical Details </h1>
<div style="overflow-x:auto;">
                <table class=" center">
                    <tr>
                    <th>First Name </th>
                    <th>Middle Name </th>
                    <th>Last Name</th>
                    <th>Gender </th>
                    <th>Donated Organ</th>
                    <th>Part od Side of the Organ</th>
                    <th>Blood Group</th>
                    <th>Height</th>
                    <th>Weight</th>
                </tr>
                <?php
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                        $f_name = $row['f_name'];
                        $m_name = $row['m_name'];
                        $l_name = $row['l_name'];
                        $gender = $row['gender'];
                        $organ_name = $row['organ_name'];
                        $part_side = $row['part_side'];
                        $blood_group= $row['blood_group'];
                        $height = $row['height'];
                        $weight= $row['weight'];

                        ?>
                        <tr>
                            <td><?php echo $f_name;?></td>
                            <td><?php echo $m_name;?></td>
                            <td><?php echo $l_name;?></td>
                            <td><?php echo $gender;?></td>
                            <td><?php echo $organ_name;?></td>
                            <td><?php echo $part_side;?></td>
                            <td><?php echo $blood_group;?></td>
                            <td><?php echo $height;?></td>
                            <td><?php echo $weight;?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                </table>
            <form>
        </div>
        

</body>
</html> 