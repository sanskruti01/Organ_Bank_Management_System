<?php
    $connection = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($connection, "mydb");
    $rec_id = "";
    $score= "";
  
    $query = "select recepient.rec_id,recepient.f_name,recepient.m_name,recepient.l_name,organ.organ_name,
    organ.part_side, transplant.organ_id, transplant.date_time_of_transplant, coordinators.ins_name
     from transplant,organ,coordinators,recepient where transplant.organ_id=organ.organ_id and transplant.rec_id=recepient.rec_id and
     recepient.ins_id=coordinators.ins_id";
    
    
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><font style="color:aliceblue">My Profile</font></a>
                    <div class='dropdown-menu'>
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    
                    </div>
            </li>
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
</nav>
<div style="overflow-x:auto;">
<h1>Organ Transplantation details </h1>
       
                
                <table class="table-bordered" width="900px" style="text-align: center">
                    <tr>
                    <th>Recipient Id </th>
                    <th>First Name</th>
                    <th>Middle Name </th>
                    <th>Last Name</th>
                    <th>Organ Name</th>
                    <th>Part/Side</th>
                    <th>Organ Id </th>
                    
                    <th>Date of Transplant </th>
                    <th>Hospital Name</th>    
                    
                </tr>
                <?php
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                        $rec_id = $row["rec_id"];
                        $f_name = $row['f_name'];
                        $m_name = $row["m_name"];
                        $l_name = $row['l_name'];
                        $o_name = $row["organ_name"];
                        $part = $row['part_side'];
                        $o_id = $row["organ_id"];
                        $date = $row['date_time_of_transplant'];
                        
                        $ins = $row['ins_name'];
                        
                     
                    
                        ?>
                        <tr>
                  
                            <td><?php echo $rec_id;?></td>
                            <td><?php echo $f_name;?></td>
                            <td><?php echo $m_name;?></td>
                            <td><?php echo $l_name;?></td>
                            <td><?php echo $o_name;?></td>
                            <td><?php echo $part;?></td>
                            <td><?php echo $o_id;?></td>
                            <td><?php echo $date;?></td>
                            <td><?php echo $ins;?></td>

                     
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                
          
        </div>
       
    
</body>
</html>