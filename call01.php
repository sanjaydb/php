<?php

 include('db1.php');  
      
      
        $sql = "select * from post";  
        $result = mysqli_query($con, $sql);  

    while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC) ) {
        echo "<br>".$row['POSTTITLE'];
    }
    
    mysqli_close($con);  
?>
