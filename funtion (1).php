<?php
    function donor(){
        $connection = mysqli_connect("localhost", "root","");
        $db=mysqli_select_db($connection,"mydb");
                        
        $donor_count = "";
        $query = "select count_donor() AS count_donor";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)){
            $donor_count = $row['count_donor'];
        }
        return($donor_count); 
    }
?>