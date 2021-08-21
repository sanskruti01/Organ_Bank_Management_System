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
            
                <a class="navbar-brand" href="admin_dashboard.php"> 
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
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action=" " method="post">
                <div class="form-group">
                <label>Camp ID:</label>
                <input type="text" class="form-control" name="camp_id">
                </div>
                <div class="form-group">
                <label>Place:</label>
                <input type="text" class="form-control"  name="place">
                </div>
                <div class="form-group">
                <label>Date:</label>
                <input type="text" class="form-control" name="date"  >
                </div>
                <div class="form-group">
                <label>Total Donors</label>
                <input type="text" class="form-control" name="donors"  >
                </div>
                <div class="form-group">
                <label>Total Organs</label>
                <input type="text" class="form-control" name="organs"  >
                </div>
            
                <button type="submit"  name="update" class="btn btn-primary">Add</button>
                
            </form>

            
           
        </div>
    </div>
    
</body>
</html>
<?php
     
     if(isset($_POST["update"])){
     
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
        $query=  "insert into camp values('$_POST[camp_id]',
        '$_POST[place]',
        '$_POST[date]',
        $_POST[donors],
        $_POST[organs]
        )";
    
        
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");

     $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
    
     
 }