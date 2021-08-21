<?php
 session_start();
 $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
    $camp_id = "";
    $place = "";
    $camp_date = "";
    $total_donors = "";
    $total_organ_donated = "";
    $query= "select * from camp where camp_id = '$_GET[cid]'";
    $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
    $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
    while ($row= mysqli_fetch_assoc($result)){
            $camp_id = $row['camp_id'];
            $place = $row['place'];
            $camp_date = $row['camp_date'];
            $total_donors= $row['total_donors'];
            $total_organ_donated= $row['total_organ_donated'];
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
            <form action=" " method="post">
                <div class="form-group">
                <label>Camp ID:</label>
                <input type="text" class="form-control" name="camp_id" value="<?php echo $camp_id;?>">
                </div>
                <div class="form-group">
                <label>Place:</label>
                <input type="text" class="form-control"  name="place" value="<?php echo $place;?>">
                </div>
                <div class="form-group">
                <label>Date:</label>
                <input type="text" class="form-control" name="camp_date" value="<?php echo $camp_date;?>" >
                </div>
                <div class="form-group">
                <label>Total Donors:</label>
                <input type="text" class="form-control" name="total_donors" value="<?php echo $total_donors;?>" >
                </div>
                <div class="form-group">
                <label>Total Organs:</label>
                <input type="text" class="form-control" name="total_organ_donated" value="<?php echo $total_organ_donated;?>">
                </div>
                <button type="submit"  name="update" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
</body>
</html>

<?php
        if(isset($_POST["update"])){
     
        $connection=mysqli_connect("localhost","root","");
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
        $db=mysqli_select_db($connection,"mydb");
        $query=  "update camp set camp_id='$_POST[camp_id]',
        place = '$_POST[place]',
        camp_date ='$_POST[camp_date]',
        total_donors= $_POST[total_donors],
        total_organ_donated = $_POST[total_organ_donated]
        where camp_id = '$_GET[cid]' ";
        
        $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
        }
    ?>
