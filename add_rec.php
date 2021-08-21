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
            <form action=" " method="post">
                <div class="form-group">
                <label>Recepient Id:</label>
                <input type="text" class="form-control" name="rec_id">
                </div>
                <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control"  name="f_name">
                </div>
                <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" class="form-control" name="m_name"  >
                </div>
                <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="l_name"  >
                </div>
                <div class="form-group">
                <label>Gender:</label>
                <input type="text" class="form-control" name="gender"  >
                </div>
                <div class="form-group">
                <label>Date of birth:</label>
                <input type="text" class="form-control"  name="dob">
                </div>
                <div class="form-group">
                <label>Aadhar Id:</label>
                <input type="text" class="form-control"  name="aadhar_id">
                </div>
                <div class="form-group">
                <label>Contact No.:</label>
                <input type="text" class="form-control"  name="contact_no">
                </div>
                <div class="form-group">
                <label>reg_date:</label>
                <input type="text" class="form-control"  name="reg_date">
                </div>
                <div class="form-group">
                <label>Hospital Id :</label>
                <input type="text" class="form-control"  name="ins_id">
                </div>
                <div class="form-group">
                <label>Address:</label>
                <label>House Name:</label>
                <input type="text" class="form-control"  name="h_name">
                </div>
                <div class="form-group">
                <label>Society Name:</label>
                <input type="text" class="form-control"  name="s_name">
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
                <label> Medical Details: Blood Group:</label>
                <input type="text" class="form-control" name="blood_group">
                </div>
                <div class="form-group">
                <label>Height:</label>
                <input type="text" class="form-control"  name="height">
                </div>
                <div class="form-group">
                <label>Weight:</label>
                <input type="text" class="form-control" name="weight"  >
                </div>
                <div class="form-group">
                <label>Needed Organ:</label>
                <input type="text" class="form-control" name="organ"  >
                </div>
                <div class="form-group">
                <label>Part/Side:</label>
                <input type="text" class="form-control" name="part"  >
                </div>
                <button type="submit"  name="update" class="btn btn-primary">Next</button>
                
            </form>

            
           
        </div>
    </div>
    
</body>
</html>
<?php
     
     if(isset($_POST["update"])){
     
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
        $query=  "insert into recepient values('$_POST[rec_id]',
        '$_POST[f_name]',
        '$_POST[m_name]',
        '$_POST[l_name]',
        '$_POST[gender]',
        '$_POST[dob]',
        '$_POST[aadhar_id]',
        '$_POST[contact_no]',
        '$_POST[reg_date]',
        '$_POST[ins_id]',
        0)";
        $query2=  "insert into address values('$_POST[h_name]',
        '$_POST[s_name]',
        '$_POST[city]',
        $_POST[pincode],
        '$_POST[state]',
        null,
        '$_POST[rec_id]')";
        $query3=  "insert into rec_details values('$_POST[rec_id]',
            '$_POST[blood_group]',
        $_POST[height],
        $_POST[weight],
        '$_POST[organ]',
        '$_POST[part]'
        )";
        
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");

     $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
     if($result == false) {
        echo 'The query failed.';
        
    } else {
       echo'Added Successfully';
    }
     
     $result2 = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
     if($result2 == false) {
        echo 'The query failed.';
        
    } else {
       echo'Added Successfully';
    }
     $result3 = mysqli_query($connection, $query3)  or die(mysqli_error($link)); 
     if($result3 == false) {
        echo 'The query failed.';
        
    } else {
       echo'Added Successfully';
    }
 }