<!DOCTYPE html>
<html>

<head>
<title>Admin Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="hospital login">
<center>
<h1>Sanjeevani Organ Donation and Transplantation</h1>
  <h1>Login</h1>
  </center>
    <div class='row'>
        <div class='col-lg-5 m-auto'>
            <div class='card mt-5 bg-dark' >
                <div class='card-title text-center mt-3'><br>
                    <img src="user.png" width="='150px " height="150 px">
                </div>
                <div class='card-body'>
                    <form action='' method="post">
                        <div class="input-group mb-3">
                            <div class="input-group prepend">
                                <span class="input-group text">
                                    <i class='fa fa-user fa-2x'></i>
                                </span>
                            </div>
                            <input type='text' class='form-control py-4' name="user" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group prepend">
                                <span class="input-group text">
                                    <i class='fa fa-lock fa-2x'></i>
                                </span>
                            </div>
                            <input type='text' class='form-control py-4' name="password" placeholder="Password">
                        </div>
                        <center>
                        <input type='submit' class="btn btn-primary" value="Login" name="submit">
                        </center>
                    </form>
                    <?php
                    if(isset($_POST["submit"])){
                        $connection=mysqli_connect("localhost","root","");
                        $db=mysqli_select_db($connection,"mydb");
                        $query="select * from login where user='$_POST[user]'";
                        $query_run=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($query_run)){
                            if( $row['user']==$_POST['user'] ){
                                if($row['password']==$_POST['password']){
                                    header("Location:admin_dashboard.php");
                                }
                                else{
                                    echo"wrong Password";
                                }
                            }
                            else{
                                echo"wrong username";
                            
                        }
                    }
                }
                    ?>
                </div>

            </div>
        </div>
    </div>
    

</body>
</html>