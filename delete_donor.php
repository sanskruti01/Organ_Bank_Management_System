<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
    $query1= " delete from donor where donor_id = '$_GET[did]'";
    $query2= " delete from address where donor_id = '$_GET[did]'";
    $query3= " delete from medical_detail where donor_id = '$_GET[did]'";
    $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
    $result1 = mysqli_query($connection, $query1)  or die(mysqli_error($link));
    $result2  = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
    $result3  = mysqli_query($connection, $query3)  or die(mysqli_error($link)); 
?>

<script type = "text/javascript">
    alert("donor deleted");
    window.location.href = "manage_donor.php";
</script>