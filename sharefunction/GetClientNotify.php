<?php


include_once("config.php");






    $query= mysqli_query($conn,"SELECT * FROM clintmessages ");
    

    $row = mysqli_num_rows($query);
    
   
   
     echo ''.$row.'';
   
     



    




?>