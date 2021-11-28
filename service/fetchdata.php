<?php

include_once("config.php");

$Page= strip_tags($_POST['page']);


if($Page=="members")
{

$ID=strip_tags($_POST['id']);




$query= mysqli_query($conn,"SELECT * FROM teammember WHERE member_id ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["member_name"] = $row["member_name"];

  $data["title"] = $row["title"];

  $data["image"] = $row["image"];

 
  }

 echo json_encode($data) ;
}


else if($Page=="techniqal")
{

$ID=strip_tags($_POST['id']);




$query= mysqli_query($conn,"SELECT * FROM techniqal_team WHERE techniqal_teamID  ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["coach_name"] = $row["coach_name"];

  $data["title"] = $row["title"];

  $data["image"] = $row["image"];
  $data["Descriptions"] = $row["Descriptions"];
 
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

$query= mysqli_query($conn,"SELECT * FROM players WHERE PlayerID='$ID'");

$row=mysqli_fetch_assoc($query);
 
  $data["PlayerName"] = $row["PlayerName"];
  $data["position"] = $row["position"];
  $data["number"] = $row["number"];
  $data["image"] = $row["image"];
 echo json_encode($data) ;
}






else if($Page=="news")
{

$ID=strip_tags($_POST['id']);


$query= mysqli_query($conn,"SELECT * FROM news_club WHERE news_club_ID  ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
 
  $data["Tille"] = $row["Tille"];

  $data["New"] = $row["New"];
  $data["PublishDate"] = $row["PublishDate"];

  $data["image1"] = $row["image1"];
  $data["image2"] = $row["image2"];
  $data["image3"] = $row["image3"];
  $data["image4"] = $row["image4"];
  $data["image5"] = $row["image5"];
  $data["image6"] = $row["image6"];
  $data["image7"] = $row["image7"];
  $data["image8"] = $row["image8"];
  
  }

 echo json_encode($data) ;
}


?>