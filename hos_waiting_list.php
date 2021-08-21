<?php
session_start();
    $connection = mysqli_connect("localhost", "root","");
    $db = mysqli_select_db($connection, "mydb");
    $rec_name = "";
    $rec_lname = "";
    $rec_mname = "";
    $score= "";
  
    $query = "select recepient.f_name,recepient.m_name,recepient.l_name,waiting_list.months_of_waiting 
    from recepient,waiting_list where recepient.rec_id=waiting_list.rec_id and recepient.ins_id='$_SESSION[user]' order by(months_of_waiting) desc";
    
    
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
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        table.center {
            margin-left: 10px;
            margin-right: auto;
        } 
</style>
</head class="Hospital Dashboard"><nav class="navbar navbar-expand-lg navbar-dar bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
            
                <a class="navbar-brand" href=""> 
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
    
    </nav><br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-center">
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown"> Recepient </a>
                <div class="dropdown-menu">
                    <a href="add_rec.php" class="dropdown-item"> Add Recepient </a>
                    <a href="manage_rec.php" class="dropdown-item">Manage Recepient </a>
                    
                </div>
            </li>
         
        </ul>
    </div>
</nav>



<div style="overflow-x:auto;">
<br><br><h1> Waiting List</h1>
       
                
                <table class="table-bordered" width="900px" style="text-align: center">
                    <tr>
                    <th>Recipient First Name </th>
                    <th>Recipient Middle Name </th>
                    <th>Recipient Last Name </th>
                    
                    <th>Months of Waiting</th>    
                </tr>
                <?php
                    $query_run = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($query_run)){
                        $rec_name = $row["f_name"];
                        $rec_mname = $row["m_name"];
                        $rec_lname = $row["l_name"];
                        
                        
                     
                        $score = $row['months_of_waiting'];
                     
                    
                        ?>
                        <tr>
                        <td><?php echo $rec_name;?></td>
                        <td><?php echo $rec_mname;?></td>
                            <td><?php echo $rec_lname;?></td>
                            <td><?php echo $score;?></td>
                     
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                
          
        </div>
       
    
</body>
</html>