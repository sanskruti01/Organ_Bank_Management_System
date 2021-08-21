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
    
    <div style="overflow-x:auto;">
            <table class="table table-bordered table-hover">
                <thead>
                     <tr>
                        <th>Institution Id</th>
                        <th>Institution Name</th>
                        <th>Contact No.1</th>
                        <th>Contact No.1</th>
                        <th>Address ID</th>
                        <th>Area</th>
                        <th>Road</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>State</th>
                        <th>Distance</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <?php
    
                    $connection = mysqli_connect("localhost", "root","");
                    $db = mysqli_select_db($connection, "mydb");
                   
                    $query = "select coordinators.ins_id, coordinators.ins_name, coordinators.contact_no1, coordinators.contact_no2, ins_address.ins_add_id,
                    ins_address.area, ins_address.road, ins_address.city, ins_address.pincode, 
                    ins_address.state, coordinators.dis_from_bank 
                    from coordinators, ins_address
                    where coordinators.adress_id = ins_address.ins_add_id";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td><?php echo $row['ins_id'];?></td>
                    <td><?php echo $row['ins_name'];?></td>
                    <td><?php echo $row['contact_no1'];?></td>
                    <td><?php echo $row['contact_no2'];?></td>
                    <td><?php echo $row['ins_add_id'];?></td>
                    <td><?php echo $row['area'];?></td>
                    <td><?php echo $row['road'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['pincode'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td><?php echo $row['dis_from_bank'];?></td>
                    <td>
                     <button class="btn" name="" ><a href="coord_edit.php?bn=<?php echo $row['ins_add_id'];?>">Edit</a></button>
                     <button class="btn" name=""><a href="delete_coordinators.php?bn=<?php echo $row['ins_add_id'];?>">Delete</a></button>
                    </td>
                </tr>

            <?php
                    }
            ?>
            </table>
        
       
    </div>       
            

            
           
     
    
    
</body>
</html>
 }