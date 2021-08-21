<?php
 session_start();
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><font style="color:aliceblue">My Profile</font></a>
                    <div class='dropdown-menu'>
                    <a class="dropdown-item"href="view_profile.php">View Profile</a>
                    <a class="dropdown-item"href="edit_profile.php">Edit Profile</a>
                    
                    </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php"><font style="color:aliceblue">Logout</font></a>
            </li>
            </ul>

        </div>
    </nav><br>
    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8">
            <table class="table table-bordered table-hover">
                <thead>
                     <tr>
                        <th>Camp Id</th>
                        <th>Place</th>
                        <th>Date</th>
                        <th>Total Donors</th>
                        <th>Total Organs</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <?php
    
                    $connection = mysqli_connect("localhost", "root","");
                    $db = mysqli_select_db($connection, "mydb");
                   
                    $query = "select * from camp";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $row['camp_id'];?></td>
                    <td><?php echo $row['place'];?></td>
                    <td><?php echo $row['camp_date'];?></td>
                    <td><?php echo $row['total_donors'];?></td>
                    <td><?php echo $row['total_organ_donated'];?></td>
                    <td>
                        <button class="btn" name=""><a href="edit_camp.php?cid=<?php echo $row['camp_id'];?>">Edit</a></button>
                        <button class="btn" name=""><a href="delete_camp.php?cid=<?php echo $row['camp_id'];?>">Delete</a></button>
                    </td>
                </tr>

            <?php
                    }
            ?>
            </table>
        </div>
        <div class="col-md-2"> </div>
        </div>   
</body>
</html>
