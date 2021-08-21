<?php
    $connection=mysqli_connect("localhost","root","");
     $db=mysqli_select_db($connection,"mydb");
    $query= " delete from camp where camp_id = '$_GET[cid]'";
    $link = mysqli_connect("localhost","root","") or die( "Unable to connect");
    $result = mysqli_query($connection, $query)  or die(mysqli_error($link));
?>

<script type = "text/javascript">
    alert("camp deleted");
    window.location.href = "manage_camp.php";
</script>
 