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
    <div style="overflow-x:auto;">
            <table class="table table-bordered table-hover">
                <thead>
                     <tr>
                     <th>Recepient ID </th>
                     <th>First Name </th>
                    <th>Middle Name </th>
                    <th>Last Name</th>
                    <th>Gender </th>
                    <th>Birthdate</th>
                    <th>Aadhar ID</th>
                    <th>Contact No.</th>
                    <th>Needed Organ </th>
                    <th>Part/Side</th>
                    <th>Blood Group </th>
                    <th>Height </th>
                    <th>Weight </th>
                    <th>Institution ID</th>
                    <th>Date of Registration</th>
                   
                    <th>House Name</th>
                    <th>Society Name</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>State</th>
                    <th>Action</th>
                
                    </tr>
                </thead>
                <?php
    
                    $connection = mysqli_connect("localhost", "root","");
                    $db = mysqli_select_db($connection, "mydb");
                   
                    $query = "select recepient.rec_id, recepient.f_name, recepient.m_name, recepient.l_name, 
                    recepient.gender, recepient.DOB, recepient.aadhar_id, recepient.contact_no, recepient.ins_id, 
                    recepient.registration_date, rec_details.blood_group, rec_details.height, rec_details.weight, 
                    rec_details.needed_organ, rec_details.part_side, address.house_name, address.society_name, address.city, 
                    address.pincode, address.state from recepient, address, rec_details where recepient.rec_id = address.rec_id 
                    and recepient.rec_id=rec_details.rec_id ";
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                            <td><?php echo $row['rec_id'];?></td>
                            <td><?php echo $row['f_name'];?></td>
                            <td><?php echo $row['m_name'];?></td>
                            <td><?php echo $row['l_name'];?></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['DOB'];?></td>
                            <td><?php echo $row['aadhar_id'];?></td>
                            <td><?php echo $row['contact_no'];?></td>
                            <td><?php echo $row['needed_organ'];?></td>
                            
                            
                            <td><?php echo $row['part_side'];?></td>
                            <td><?php echo $row['blood_group'];?></td>
                            <td><?php echo $row['height'];?></td>
                            <td><?php echo $row['weight'];?></td>
                            <td><?php echo $row['ins_id'];?></td>
                            <td><?php echo $row['registration_date'];?></td>
                            
                            <td><?php echo $row['house_name'];?></td>
                            <td><?php echo $row['society_name'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['pincode'];?></td>
                            <td><?php echo $row['state'];?></td>
                            
                    <td>
                        <button class="btn" name=""><a href="edit_rec.php?rid=<?php echo $row['rec_id'];?>">Edit</a></button>
                        <button class="btn" name=""><a href="delete_rec.php?rid=<?php echo $row['rec_id'];?>">Delete</a></button>
                    </td>
                </tr>

            <?php
                    }
            ?>
            </table>
    </div>
</body>
</html>
