<?php 

include_once("config.php");

$Page= strip_tags($_POST['Page']);


if($Page=="members-nomage")
{

  
$member_id= strip_tags($_POST['member_id']);

$member_name = strip_tags($_POST['member_name']);

$title= strip_tags($_POST['title']);



  $query= mysqli_query($conn,"UPDATE teammember   SET title='$title', member_name='$member_name'  where member_id ='$member_id'");



}



else if($Page=="members-img")
{

  
$member_id= strip_tags($_POST['member_id']);

$member_name = strip_tags($_POST['member_name']);

$title= strip_tags($_POST['title']);

$up_file=$_FILES['img']['name'];
    
    $image_dir = '../admin/assets/images/'.$up_file ;
    
   //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);



  $query= mysqli_query($conn,"UPDATE teammember   SET title='$title', member_name='$member_name',image='$up_file'  where member_id ='$member_id'");



}


else if($Page=="tech-nomage")
{

  
$techniqal_teamID= strip_tags($_POST['techniqal_teamID']);

$coach_name = strip_tags($_POST['coach_name']);

$title= strip_tags($_POST['title']);

$Descriptions= strip_tags($_POST['Descriptions']);



  $query= mysqli_query($conn,"UPDATE techniqal_team   SET title='$title', coach_name='$coach_name',Descriptions='$Descriptions'  where techniqal_teamID ='$techniqal_teamID'");



}


else if($Page=="tech-img")
{

  
  $techniqal_teamID= strip_tags($_POST['techniqal_teamID']);

  $coach_name = strip_tags($_POST['coach_name']);
  
  $title= strip_tags($_POST['title']);
  
  $Descriptions= strip_tags($_POST['Descriptions']);
  
$up_file=$_FILES['img']['name'];
    
    $image_dir = '../admin/assets/images/'.$up_file ;
    
   //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);



    $query= mysqli_query($conn,"UPDATE techniqal_team   SET title='$title', coach_name='$coach_name',Descriptions='$Descriptions',	image='$up_file'  where techniqal_teamID ='$techniqal_teamID'");



}




else if($Page=="team-nomage")
{

  
$team_id= strip_tags($_POST['team_id']);

$team_edit = strip_tags($_POST['team_edit']);

$Team_Name = strip_tags($_POST['Team_Name']);



  $query= mysqli_query($conn,"UPDATE teams   SET  Team_Name='$Team_Name'  where Team_ID ='$team_id'");


  $query= mysqli_query($conn,"UPDATE arrangment_team   SET  team_name='$Team_Name'  where team_name ='$team_edit'");


}


else if($Page=="champ-img")
{

  
$club_shampion_id= strip_tags($_POST['club_shampion_id']);

$shampion_Namee = strip_tags($_POST['shampion_Namee']);



  $up_file=$_FILES['img']['name'];
    
    $image_dir = '../admin/assets/images/'.$up_file ;
    
   //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);


  $query= mysqli_query($conn,"UPDATE club_shampion   SET  shampion_Name='$shampion_Namee',image='$up_file'  where club_shampion_id ='$club_shampion_id'");

}





else if($Page=="champ-nomage")
{

  
$club_shampion_id= strip_tags($_POST['club_shampion_id']);

$shampion_Namee = strip_tags($_POST['shampion_Namee']);


  $query= mysqli_query($conn,"UPDATE club_shampion   SET  shampion_Name='$shampion_Namee' where club_shampion_id ='$club_shampion_id'");

}











else if($Page=="matches")
{

  
$Match_ID= strip_tags($_POST['Match_ID']);

$First_Team = strip_tags($_POST['First_Team']);
$Second_Team = strip_tags($_POST['Second_Team']);
$MatchDate = strip_tags($_POST['MatchDate']);
$dayname = strip_tags($_POST['dayname']);

$timepicker2 = strip_tags($_POST['timepicker2']);

  $query= mysqli_query($conn,"UPDATE all_matches   SET  First_Team='$First_Team',Second_Team='$Second_Team',
  MatchDate='$MatchDate',Day='$dayname', Hour='$timepicker2' where Match_ID ='$Match_ID'");

}

else if($Page=="players")
{

  
$PlayerID= strip_tags($_POST['PlayerID']);

$name = strip_tags($_POST['name']);
$mobile_number = strip_tags($_POST['mobile_number']);

$identity_number = strip_tags($_POST['identity_number']);

  $query= mysqli_query($conn,"UPDATE members_subscribtions   SET  name='$name',mobile_number='$mobile_number',identity_number='$identity_number'
   where memberid ='$PlayerID'");

}

 ?>