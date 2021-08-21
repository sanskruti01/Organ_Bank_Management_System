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
            <form action="" method="post">
                <div class="form-group">
                <label>Institution ID:</label>
                <input type="text" class="form-control" name="ins_id">
                </div>
                <div class="form-group">
                <label>Institution Name:</label>
                <input type="text" class="form-control"  name="ins_name">
                </div>
                <div class="form-group">
                <label>Contact No.1:</label>
                <input type="text" class="form-control" name="cont_1"  >
                </div>
                <div class="form-group">
                <label>Contact No.2</label>
                <input type="text" class="form-control" name="cont_2"  >
                </div>
                <div class="form-group">
                <label>Address ID:</label>
                <input type="text" class="form-control" name="add_id"  >
                </div>
                <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control"  name="area">
                </div>
                <div class="form-group">
                <label>Road:</label>
                <input type="text" class="form-control"  name="road">
                </div>
                <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control"  name="city">
                </div>
                
                <div class="form-group">
                <label>Pincode:</label>
                <input type="text" class="form-control"  name="pincode">
                </div>
                <div class="form-group">
                <label>State:</label>
                <input type="text" class="form-control"  name="state">
                </div>
                <div class="form-group">
                <label>Distance from Bank</label>
                <input type="text" class="form-control" name="distance"  >
                </div>
                <div class="form-group">
                <label>Password:</label>
                <input type="text" class="form-control"  name="password">
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
        $query=  "insert into coordinators values('$_POST[ins_id]',
        '$_POST[ins_name]',
        '$_POST[cont_1]',
        '$_POST[cont_2]',
        $_POST[distance],'$_POST[add_id]','$_POST[password]')";
        $query2=  "insert into ins_address values('$_POST[add_id]',
        '$_POST[area]',
        '$_POST[road]',
        '$_POST[city]',
        $_POST[pincode],
        '$_POST[state]'
        )";
        
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");

         
     $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
     $result2 = mysqli_query($connection, $query2)  or die(mysqli_error($link));
     
 }