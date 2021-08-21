<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
    $query1= "delete from coordinators where adress_id = '$_GET[bn]'";
    $query2= "delete from ins_address where ins_add_id = '$_GET[bn]'";
    $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
    $result = mysqli_query($connection, $query1)  or die(mysqli_error($link));
    $result2 = mysqli_query($connection, $query2)  or die(mysqli_error($link)); 
?>

<script type = "text/javascript">
    alert("coordinator deleted");
    window.location.href = "update_coordinators.php";
</script>
 