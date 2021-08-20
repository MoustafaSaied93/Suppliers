<?php
include("config.php");

session_start();

$ID=$_GET['ID'];


$UpdateStatus = mysqli_query ($conn, "UPDATE accounts SET UserStatus = '0' WHERE UserID = '$ID'");

session_destroy();
  ?>