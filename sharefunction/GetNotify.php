<?php


include_once("config.php");

session_start();

if(isset ($_SESSION['id']))
{

$UserID=$_SESSION['id'];


    $query= mysqli_query($conn,"SELECT * FROM notfication where UserID='$UserID'");
    

    $row = mysqli_num_rows($query);
    {
   
   
     echo ''.$row.'';
   
     }



    }




?>