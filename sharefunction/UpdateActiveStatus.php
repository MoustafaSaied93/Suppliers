<?php
include("../config.php");



	
$ID=$_GET['ID'];


$UpdateStatus = mysqli_query ($conn, "UPDATE accounts SET UserStatus = '1' WHERE UserID = '$ID'");




  ?>