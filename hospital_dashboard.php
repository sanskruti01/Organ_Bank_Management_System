<?php
                   session_start();
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"mydb");
                        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
                        $query="call count_recepiant_hos('$_SESSION[user]')";
                        $result = mysqli_query($connection, $query)  or die(mysqli_error($link));
                        while ($row = mysqli_fetch_assoc($result)){
                            
                            $r_count=$row["r_count"];
                        }
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
    
    </nav><br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-center">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Recepient </a>
                <div class="dropdown-menu">
                    <a href="add_rec.php" class="dropdown-item"> Add Recepient </a>
                    <a href="manage_rec.php" class="dropdown-item">Manage Recepient </a>
                    
                </div>
            </li>
         
        </ul>
    </div>
</nav>

<span><marquee> This is Sanjeevani Organ Donation and Transplantation </marquee></spam><br><br>
    <div class= "row"> 
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Camp </div>
                <div class="card-body">
                   
                    <a href="hos_camp_det.php" class="btn btn-success" target="_blank"> View Camp Details </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Recepient </div>
                <div class="card-body">
                    <p class="card-text"> Total No of recepients of hospital: <?php echo $r_count;?> </p>
                    <a href="rec_det.php" class="btn btn-primary" target="_blank"> View Recepient details</a><br><br>
                    
                </div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Sanjeevani Services</div>
                <div class="card-body">
                    <p class="card-text">  </p>
                    <a href="hos_waiting_list.php" class="btn btn-danger" target="_blank">  Waiting List </a><br><br>
                    <a href="organ_avail.php" class="btn btn-danger" target="_blank"> Organ Availabily </a>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>