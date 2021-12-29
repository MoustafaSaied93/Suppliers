<?php

include_once("config.php");

$Page= strip_tags($_POST['page']);


if($Page=="subscripe")
{

$ID=strip_tags($_POST['id']);



$query= mysqli_query($conn,"SELECT * FROM subscriptions WHERE subid  ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["name"] = $row["name"];

  $data["startdate"] = $row["startdate"];

  $data["enddate"] = $row["enddate"];

  $data["price"] = $row["price"];
 
  }

 echo json_encode($data) ;
}


else if($Page=="techniqal")
{

$ID=strip_tags($_POST['id']);





$query= mysqli_query($conn,"SELECT * FROM trainer WHERE trainer_id  ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["trainer_name_ar"] = $row["trainer_name_ar"];
  $data["trainer_name_en"] = $row["trainer_name_en"];


  $data["mobile_number"] = $row["mobile_number"];
  $data["age"] = $row["age"];
  $data["hieght"] = $row["hieght"];
  $data["wieght"] = $row["wieght"];

  $data["image"] = $row["image"];

  $data["descrip_ar"] = $row["descrip_ar"];
  $data["descrip_en"] = $row["descrip_en"];
 
  }

 echo json_encode($data) ;
}



else if($Page=="teams")
{

$ID=strip_tags($_POST['id']);




$query= mysqli_query($conn,"SELECT * FROM teams WHERE Team_ID  ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["Team_Name"] = $row["Team_Name"];


  $data["Team_Logo"] = $row["Team_Logo"];
  
  }

 echo json_encode($data) ;
}


else if($Page=="matches")
{

$ID=strip_tags($_POST['id']);


$query= mysqli_query($conn,"SELECT * FROM all_matches WHERE Match_ID   ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["First_Team"] = $row["First_Team"];

  $data["Second_Team"] = $row["Second_Team"];
  $data["MatchDate"] = $row["MatchDate"];
  $data["Hour"] = $row["Hour"];
  
  }

 echo json_encode($data) ;
}



else if($Page=="vedio")
{

$ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM vedios WHERE VedioID   ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["Vedio_Title"] = $row["Vedio_Title"];

  $data["Vedio_Link"] = $row["Vedio_Link"];
  
  
  }

 echo json_encode($data) ;
}


else if($Page=="champs")
{

$ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM club_shampion WHERE club_shampion_id='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["shampion_Name"] = $row["shampion_Name"];

  $data["image"] = $row["image"];
  
  
  }

 echo json_encode($data) ;
}
else if($Page=="players")
{

$ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM members_subscribtions WHERE memberid ='$ID'");

$row=mysqli_fetch_assoc($query);
 
  $data["name"] = $row["name"];
  $data["identity_number"] = $row["identity_number"];
  $data["mobile_number"] = $row["mobile_number"];

 echo json_encode($data) ;
 
}


?>