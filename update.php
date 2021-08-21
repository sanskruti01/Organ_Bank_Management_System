<?php
session_start();

    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"mydb");
    $query="update coordinators set ins_name='$_POST[ins_name]',contact_no1='$_POST[contact_1]',
    contact_no2='$_POST[contact_2]',dis_from_bank='$_POST[dis]' where ins_id='$_SESSION[user]'";
    
    $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Updated Successfully....");
window.location.href="hospital_dashboard.php";
</script>
