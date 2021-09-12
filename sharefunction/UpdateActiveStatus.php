<?php
include("../config.php");



	
$ID=strip_tags($_GET['ID']);


$UpdateStatus = mysqli_query ($conn, "UPDATE accounts SET UserStatus = '1' WHERE UserID = '$ID'");




  ?>