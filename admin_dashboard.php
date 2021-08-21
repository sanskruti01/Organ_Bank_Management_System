<?php
                   session_start();
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"mydb");
                        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
                        $query="call count_donor()";
                        $result = mysqli_query($connection, $query)  or die(mysqli_error($link));
                        while ($row = mysqli_fetch_assoc($result)){
                            $r_count=$row["r_donor"];
                        }
                            ?>
            <?php
           
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"mydb");
                        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");                 
                        $query1="call count_rec()";
                        $result2 = mysqli_query($connection, $query1)  or die(mysqli_error($link));
                        while ($row = mysqli_fetch_assoc($result2)){
                            $r_rec=$row["r_rec"];
                        }
                            ?>
                             <?php
           
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"mydb");
           $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
                  
           $query3="call count_coor()";
           $result3= mysqli_query($connection, $query3)  or die(mysqli_error($link));
           while ($row = mysqli_fetch_assoc($result3)){
               $r_coor=$row["r_coor"];
           }
               ?>
 <?php
           
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"mydb");
           $link = mysqli_connect("localhost","root","") or die( "Unable to connect");                 
           $query4="call count_camp()";
           $result4= mysqli_query($connection, $query4)  or die(mysqli_error($link));
           while ($row = mysqli_fetch_assoc($result4)){              
               $r_camp=$row["r_camp"];}
               ?>
                <?php
           
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"mydb");
           $link = mysqli_connect("localhost","root","") or die( "Unable to connect");                 
           $query5="call count_transplant()";
           $result5= mysqli_query($connection, $query5)  or die(mysqli_error($link));
           while ($row = mysqli_fetch_assoc($result5)){
               
               $r_transplant=$row["r_transplant"];
           }
               ?>
               <?php
           
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"mydb");
           $link = mysqli_connect("localhost","root","") or die( "Unable to connect");                 
           $query6="call count_organ()";
           $result6= mysqli_query($connection, $query6)  or die(mysqli_error($link));
           while ($row = mysqli_fetch_assoc($result6)){
               
               $r_organ=$row["r_organ"];
           }
           
               ?>
               <?php
           
           $connection=mysqli_connect("localhost","root","");
           $db=mysqli_select_db($connection,"mydb");
           $link = mysqli_connect("localhost","root","") or die( "Unable to connect");                 
           $query7="call count_wait()";
           $result7= mysqli_query($connection, $query7)  or die(mysqli_error($link));
           while ($row = mysqli_fetch_assoc($result7)){
               
               $r_wait=$row["r_wait"];
           }
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
</style>
</head class="Admin Dashboard">
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
</nav>

<span><marquee> This is Sanjeevani Organ Donation and Transplantation </marquee></spam><br><br>
    <div class= "row"> 
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Donor </div>
                <div class="card-body">
                <p class="card-text"> No. of total Donors: <?php echo $r_count ?> </p>
                    <a href="don_details.php" class="btn btn-success" target="_blank"> Personal Details </a><br><br>
                    <a href="don_med_details.php" class="btn btn-success" target="_blank">  Medical Details </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Recepient Details</div>
                <div class="card-body">
                    <p class="card-text"> No. of total Recipients: <?php echo $r_rec ?> </p>
                    <a href="admin_rec_det.php" class="btn btn-primary" target="_blank"> Personal Details</a><br><br>
                    <a href="rec_med_det.php" class="btn btn-primary" target="_blank">  Medical Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Coordinators </div>
                <div class="card-body">
                    <p class="card-text"> No. of total Coordinators:<?php echo $r_coor ?></p>
                    <a href="coordinators_de.php" class="btn btn-danger" target="_blank"> View Coordinators details </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Camps </div>
                <div class="card-body">
                    <p class="card-text"> No. of total camps: <?php echo $r_camp?> </p>
                    <a href="camp_det.php" class="btn btn-info" target="_blank"> View Camp details </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Transplantation </div>
                <div class="card-body">
                    <p class="card-text"> No. of total Transplants: <?php echo $r_transplant ?>  </p>
                    <a href="transplant.php" class="btn btn-warning" target="_blank"> View Transplantation Details </a><br><br>
                    <a href="manage_transplantation.php" class="btn btn-warning" target="_blank"> Add Transplantation </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Organs </div>
                <div class="card-body">
                    <p class="card-text"> No. of total Organs: <?php echo $r_organ?>   </p>
                    <a href="organ_details.php" class="btn btn-secondary" target="_blank"> View organ Details </a><br><br>
                    <a href="match.php" class="btn btn-secondary" target="_blank"> Match the Organ </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header"> Waiting List </div>
                <div class="card-body">
                    <p class="card-text">No. of recipients in waiting List: <?php echo $r_wait?>   </p>
                    <a href="waiting_list.php" class="btn btn-danger" target="_blank"> View Waiting List </a><br><br>
                </div>
            </div>
        </div>

    </div>
</body>
</html>