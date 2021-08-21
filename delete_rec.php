<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
    $query1= " delete from recepient where rec_id = '$_GET[rid]'";
    $query2= " delete from address where rec_id = '$_GET[rid]'";
    $query3= " delete from rec_details where rec_id = '$_GET[rid]'";
    $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
    $result1 = mysqli_query($connection, $query1)  or die(mysqli_error($link));
    $result2  = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
    $result3  = mysqli_query($connection, $query3)  or die(mysqli_error($link)); 
?>

<script type = "text/javascript">
    alert("recepeint deleted");
    window.location.href = "update_coordinators.php";
</script>