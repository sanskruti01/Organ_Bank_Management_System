<?php
 session_start();
 $connection=mysqli_connect("localhost","root","");
 $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
     $db=mysqli_select_db($connection,"mydb");
    $ins_id = "";
    $ins_name = "";
    $contact_no1 = "";
    $contact_no2 = "";
    $ins_add_id = "";
    $area = "";
    $road = "";
    $city = "";
    $pincode = "";
    $state = "";
    $dis_from_bank = "";
    $query= "select coordinators.ins_id, coordinators.ins_name, coordinators.contact_no1, coordinators.contact_no2, ins_address.ins_add_id,
    ins_address.area, ins_address.road, ins_address.city, ins_address.pincode, 
    ins_address.state, coordinators.dis_from_bank 
    from coordinators, ins_address
    where coordinators.adress_id = ins_address.ins_add_id and ins_add_id = '$_GET[bn]'";
   
    $query_run = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
    while ($row= mysqli_fetch_assoc($query_run)){
            $ins_id = $row['ins_id'];
            $ins_name  = $row['ins_name'];
            $contact_no1 = $row['contact_no1'];
            $contact_no2 = $row['contact_no2'];
            $ins_add_id= $row['ins_add_id'];
            $area = $row['area'];
            $road = $row['road'];
            $city= $row['city'];
            $pincode = $row['pincode'];
            $state= $row['state'];
            $dis_from_bank = $row['dis_from_bank'];
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
            
            <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php"><font style="color:aliceblue">Logout</font></a>
            </li>
            </ul>

        </div>
    </nav><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action=" " method="post">
                <div class="form-group">
                <label>Institution ID:</label>
                <input type="text" class="form-control" name="ins_id" value="<?php echo $ins_id;?>">
                </div>
                <div class="form-group">
                <label>Institution Name:</label>
                <input type="text" class="form-control"  name="ins_name" value="<?php echo $ins_name;?>">
                </div>
                <div class="form-group">
                <label>Contact No.1:</label>
                <input type="text" class="form-control" name="contact_no1" value="<?php echo $contact_no1;?>" >
                </div>
                <div class="form-group">
                <label>Contact No.2</label>
                <input type="text" class="form-control" name="contact_no2" value="<?php echo $contact_no2;?>" >
                </div>
                <div class="form-group">
                <label>Address ID:</label>
                <input type="text" class="form-control" name="ins_add_id" value="<?php echo $ins_add_id;?>">
                </div>
                <div class="form-group">
                <label>Area:</label>
                <input type="text" class="form-control"  name="area" value="<?php echo $area;?>">
                </div>
                <div class="form-group">
                <label>Road:</label>
                <input type="text" class="form-control"  name="road" value="<?php echo $road;?>">
                </div>
                <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control"  name="city" value="<?php echo $city;?>">
                </div>
                <div class="form-group">
                <label>Pincode:</label>
                <input type="text" class="form-control"  name="pincode" value="<?php echo $pincode;?>">
                </div>
                <div class="form-group">
                <label>State:</label>
                <input type="text" class="form-control"  name="state" value="<?php echo $state;?>">
                </div>
                <div class="form-group">
                <label>Distance from Bank</label>
                <input type="text" class="form-control" name="dis_from_bank" value="<?php echo $dis_from_bank;?>" >
                </div>
                <button type="submit"  name="update" class="btn btn-primary">Update</button>

               
    <?php
        if(isset($_POST["update"])){
     
     $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
        $query=  "update coordinators set ins_id='$_POST[ins_id]',
        ins_name = '$_POST[ins_name]',
        adress_id ='$_POST[ins_add_id]',
        contact_no1 = '$_POST[contact_no1]',
        contact_no1 = '$_POST[contact_no2]',
        dis_from_bank = $_POST[dis_from_bank]
        where adress_id = '$_GET[bn]'";
        $query2=  "update ins_address set ins_add_id ='$_POST[ins_add_id]',
        area ='$_POST[area]',
        road = '$_POST[road]',
        city = '$_POST[city]',
        pincode = $_POST[pincode],
        state = '$_POST[state]'
        where ins_add_id='$_GET[bn]'";
        
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");

     $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
     
     $result2 = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
     
 }
     
 ?>
            </form>

            
           
        </div>
    </div>
    
</body>
</html>

     