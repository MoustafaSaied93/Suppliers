<?php

include_once("config.php");

$team_name=$_POST['team_name'];

$team_number=$_POST['team_number'];

$matches=$_POST['matches'];

$points=$_POST['points'];





    $query= mysqli_query($conn,"UPDATE arrangment_team   SET  team_number='$team_number',matches='$matches',points='$points'  where team_name ='$team_name'");





?>