<?php
                   session_start();
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"mydb");
                        
                        $ins_name="";
                        $contact_1="";
                        $contact_2="";
                        $dis="";
                        $query="select * from coordinators where ins_id='$_SESSION[user]'";
                        $query_run=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($query_run)){
                            $ins_name=$row['ins_name'];
                            $contact_1=$row['contact_no1'];
                            $contact_2=$row['contact_no2'];
                            $dis=$row['dis_from_bank'];
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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update.php" method="post">
                <div class="form-group">
                <label>Institution Name:</label>
                <input type="text" class="form-control" value="<?php echo $ins_name;?>" name="ins_name">
                </div>
                <div class="form-group">
                <label>Contact Number 1:</label>
                <input type="text" class="form-control" value="<?php echo $contact_1;?>" name="contact_1">
                </div>
                <div class="form-group">
                <label>Contact Number 2:</label>
                <input type="text" class="form-control" value="<?php echo $contact_2;?>" name="contact_2">
                </div>
                <div class="form-group">
                <label>Distance from Sanjeevani:</label>
                <input type="text" class="form-control" value="<?php echo $dis;?>" name="dis">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
</body>
</html>