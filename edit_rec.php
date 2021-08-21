<?php
 session_start();
 $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
     $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
     $rec_id = "";
     $f_name = "";
     $m_name = "";
     $l_name = "";
     $gender = "";
     $DOB = "";
     $aadhar_id = "";
     $contact_no = "";
     $needed_organ = "";
     $part_side = "";
     $blood_group = "";
     $height = "";
     $weight = "";
     $ins_id = "";
     $registration_date = "";
    
     $house_name = "";
     $soceity_name = "";
     $city = "";
     $pincode = "";
     $state = "";
     
    $query= "select recepient.rec_id, recepient.f_name, recepient.m_name, recepient.l_name, recepient.gender, recepient.DOB, 
    recepient.aadhar_id, recepient.contact_no, recepient.ins_id, recepient.registration_date, 
     rec_details.blood_group, rec_details.height, rec_details.weight, rec_details.needed_organ, rec_details.part_side, 
     address.house_name, address.society_name, address.city, address.pincode, address.state
    from recepient, address, rec_details
    where recepient.rec_id = address.rec_id and recepient.rec_id=rec_details.rec_id  and recepient.rec_id ='$_GET[rid]' ";
   
    $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
    while ($row= mysqli_fetch_assoc($result)){
        $rec_id = $row['rec_id'];
        $f_name = $row['f_name'];
        $m_name = $row['f_name'];
        $l_name = $row['l_name'];
        $gender = $row['gender'];
        $DOB = $row['DOB'];
        $aadhar_id = $row['aadhar_id'];
        $contact_no = $row['contact_no'];
        $needed_organ = $row['needed_organ'];
        $part_side = $row['part_side'];
        $blood_group= $row['blood_group'];
        $height = $row['height'];
        $weight= $row['weight'];
        $ins_id = $row['ins_id'];
        $registration_date = $row['registration_date'];
       
        $house_name = $row['house_name'];
        $society_name= $row['society_name'];
        $city = $row['city'];
        $pincode = $row['pincode'];
        $state = $row['state'];
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
                <label>Recepient Id:</label>
                <input type="text" class="form-control" name="rec_id"  value="<?php echo $rec_id;?>">
                </div>
                <div class= "form-group">
                <label>First Name:</label>
                <input type="text" class="form-control"  name="f_name" value="<?php echo $f_name;?>">
                </div>
                <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" class="form-control" name="m_name" value="<?php echo $m_name;?> ">
                </div>
                <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="l_name" value="<?php echo $l_name;?> " >
                </div>
                <div class="form-group">
                <label>Gender:</label>
                <input type="text" class="form-control" name="gender" value="<?php echo $gender;?> " >
                </div>
                <div class="form-group">
                <label>Date of birth:</label>
                <input type="text" class="form-control"  name="DOB" value="<?php echo $DOB;?> ">
                </div>
                <div class="form-group">
                <label>Aadhar Id:</label>
                <input type="text" class="form-control"  name="aadhar_id" value="<?php echo $aadhar_id;?> ">
                </div>
                <div class="form-group">
                <label>Contact No.:</label>
                <input type="text" class="form-control"  name="contact_no" value="<?php echo $contact_no;?> ">
                </div>
                <div class="form-group">
                <label>reg_date:</label>
                <input type="text" class="form-control"  name="registration_date" value="<?php echo $registration_date;?> ">
                </div>
                <div class="form-group">
                <label>Hospital Id :</label>
                <input type="text" class="form-control"  name="ins_id" value="<?php echo $ins_id;?>">
                </div>
                
                <div class="form-group">
                <label>House Name:</label>
                <input type="text" class="form-control"  name="house_name" value="<?php echo $house_name;?>">
                </div>
                <div class="form-group">
                <label>Society Name:</label>
                <input type="text" class="form-control"  name="society_name" value="<?php echo $society_name;?>">
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
                <label> Medical Details: Blood Group:</label>
                <input type="text" class="form-control" name="blood_group" value="<?php echo $blood_group;?>">
                </div>
                <div class="form-group">
                <label>Height:</label>
                <input type="text" class="form-control"  name="height" value="<?php echo $height;?>">
                </div>
                <div class="form-group">
                <label>Weight:</label>
                <input type="text" class="form-control" name="weight" value="<?php echo $weight;?>" >
                </div>
                <div class="form-group">
                <label>Needed Organ:</label>
                <input type="text" class="form-control" name="needed_organ"  value="<?php echo $needed_organ;?>" >
                </div>
                <div class="form-group">
                <label>Part/Side:</label>
                <input type="text" class="form-control" name="part_side"  value="<?php echo $part_side;?>">
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
        $query=  "update recepient set rec_id='$_POST[rec_id]',
        f_name = '$_POST[f_name]',
        m_name = '$_POST[m_name]',
        l_name ='$_POST[l_name]',
        gender = '$_POST[gender]',
        DOB = '$_POST[DOB]',
        aadhar_id ='$_POST[aadhar_id]',
        contact_no = '$_POST[contact_no]',
        registration_date = '$_POST[registration_date]',
        ins_id = '$_POST[ins_id]' 
        where rec_id ='$_GET[rid]'";
        $query2=  "update address set 
        house_name = '$_POST[house_name]',
        society_name = '$_POST[society_name]',
        city = '$_POST[city]',
        pincode = $_POST[pincode],
        state = '$_POST[state]'
        where rec_id = '$_GET[rid]' ";
        $query3=  "update rec_details set 
        blood_group = '$_POST[blood_group]',
        height = $_POST[height],
        weight = $_POST[weight],
        needed_organ = '$_POST[needed_organ]',
        part_side = '$_POST[part_side]'
        where rec_id = '$_GET[rid]'";
        
        $link = mysqli_connect("localhost","root","") or die( "Unable to connect");

     $result = mysqli_query($connection, $query)  or die(mysqli_error($link)); 
     
     $result2 = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
     $result3 = mysqli_query($connection, $query3)  or die(mysqli_error($link)); 
        }
     
    ?>
