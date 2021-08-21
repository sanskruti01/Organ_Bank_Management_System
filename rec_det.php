
<?php
session_start();
    $connection = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($connection, "mydb");
    $rec_id="";
    $f_name = "";
    $m_name = "";
    $l_name = "";
    $gender = "";
    $DOB = "";
    $aadhar_id = "";
    $contact_no = "";
    $registration_date = "";
    $blood_group="";
    $height="";
    $weight="";
    $needed_organ="";
    $part="";
    $house_name = "";
    $soceity_name = "";
    $city = "";
    $pincode = "";
    $state = "";
    $query = "call 	rec_detailOf_Hospital('$_SESSION[user]')"; 
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
<style >
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
    <nav class="navbar navbar-expand-lg navbar-dar bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
            
                <a class="navbar-brand" href="hospital_dashboard.php"> 
                    <font style="color:aliceblue">Sanjeevani Organ Donation and Transplantation</font></a>
           
            </div>
            <span><strong></strong></span>
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"><font style="color:aliceblue">My Profile</font></a>
                    <div class='dropdown-menu'>
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    
                    </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php"><font style="color:aliceblue">Logout</font></a>
            </li>
            </ul>

        </div>
    </nav><br>
    



<span><marquee> Welcome to The Sanjeevani Organ Donation and Transplantation </marquee></spam><br><br>

<h1> Your Recipients</h1>
<div style="overflow-x:auto;">

                <table class="center" >
                <caption>
                    <tr>
                    <th>First Name </th>
                    <th>Middle Name </th>
                    <th>Last Name</th>
                    <th>Gender </th>
                    <th>Birthdate</th>
                    <th>Aadhar ID</th>
                    <th>Contact No</th>
                  
                    <th>Registration Date</th>
                    <th>Blood Group </th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th> Needed Organ</th>
                    <th>Part/Side</th>
                    <th>House Name</th>
                    <th>Society Name</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>State</th>
                </tr>
                
                <?php
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                        $f_name = $row['f_name'];
                        $m_name = $row['m_name'];
                        $l_name = $row['l_name'];
                        $gender = $row['gender'];
                        $DOB = $row['DOB'];
                        $aadhar_id = $row['aadhar_id'];
                        $contact_no = $row['contact_no'];
                        $registration_date = $row['registration_date'];
                        $blood_group=$row['blood_group'];
                        $height=$row['height'];
                        $weight=$row['weight'];
                        $needed_organ=$row['needed_organ'];
                        $part=$row['part_side'];
                        $house_name = $row['house_name'];
                        $society_name= $row['society_name'];
                        $city = $row['city'];
                        $pincode = $row['pincode'];
                        $state = $row['state'];
                   

                        ?>
                        <tr>
                            <td><?php echo $f_name;?></td>
                            <td><?php echo $m_name;?></td>
                            <td><?php echo $l_name;?></td>
                            <td><?php echo $gender;?></td>
                            <td><?php echo $DOB;?></td>
                            <td><?php echo $aadhar_id;?></td>
                            <td><?php echo $contact_no;?></td>
                            <td><?php echo $registration_date;?></td>
                            <td><?php echo $blood_group;?></td>
                            <td><?php echo $height;?></td>
                            <td><?php echo $weight;?></td>
                            <td><?php echo $needed_organ;?></td>
                            <td><?php echo $part;?></td>

                            <td><?php echo $house_name;?></td>
                            <td><?php echo $society_name;?></td>
                            <td><?php echo $city;?></td>
                            <td><?php echo $pincode;?></td>
                            <td><?php echo $state;?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </caption>
                </table>
            
        </div>
         

</body>
<l/htm> 