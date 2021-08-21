<?php
 session_start();
?>
 

<!DOCTYPE html>
<html>

<head>

<title>Login for Admin</title>
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
</head class="Admin Dashboard">
<body>
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
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action=" " method="post">
                <div class="form-group">
                <label>Organ Id:</label>
                <input type="text" class="form-control" name="o_id">
                </div>
                <div class="form-group">
                <label>Recepient Id:</label>
                <input type="text" class="form-control"  name="d_id">
                </div>
                <div class="form-group">
                <label>Date of Transplant:</label>
                <input type="text" class="form-control" name="date"  >
                </div>
                <button type="submit" name="update" class="btn btn-primary">Add</button>
            </form>
            
           
        </div>
    </div>
    
</body>
</html>
<?php
     
                if(isset($_POST["update"])){
                
                $connection=mysqli_connect("localhost","root","");
                $db=mysqli_select_db($connection,"mydb");
                   $query=  "insert into transplant values('$_POST[o_id]',
                   '$_POST[d_id]',
                   '$_POST[date]')";
                   
                
                   $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
   
                $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
                
        
            }
      
              
                       ?>
                       