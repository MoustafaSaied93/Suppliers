<?php


include_once("../config.php");






    $query= mysqli_query($conn,"SELECT * FROM product WHERE Accept='0'and Refused='0'");
    

    $row = mysqli_num_rows($query);
    {
   
   
     echo ''.$row.'';
   
     }








?>