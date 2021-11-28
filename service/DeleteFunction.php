<?php

include_once("config.php");

$Page=strip_tags($_POST['page']);


if($Page=="memberteam")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM teammember WHERE member_id  ='$ID'");

}




else if($Page=="techniqalteam")

{

    $ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM techniqal_team WHERE techniqal_teamID ='$ID'");


}


else if($Page=="team")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  Team_Logo,Team_Name  FROM teams WHERE Team_ID  ='$ID'");




$images=mysqli_fetch_assoc($query1);


$LOGO=$images['Team_Logo'];
$TEAMNAME=$images['Team_Name'];


    $image_dir1 = '../admin/assets/images/logo/'.$LOGO;

    unlink($image_dir1);


$query= mysqli_query($conn,"DELETE FROM teams WHERE Team_ID ='$ID'");

$query2= mysqli_query($conn,"DELETE FROM arrangment_team WHERE team_name ='$TEAMNAME'");



}


else if($Page=="matches")

{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM all_matches WHERE Match_ID  ='$ID'");


}


else if($Page=="vedios")

{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM vedios WHERE VedioID   ='$ID'");


}


else if($Page=="news")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  image1,image2,image3,image4,image5,image6,image7,image8 FROM news_club WHERE news_club_ID  ='$ID'");

$images=mysqli_fetch_assoc($query1);

foreach ($images as $image)
{

    $image_dir1 = '../admin/assets/images/news/'.$image ;

    unlink($image_dir1);
}


$query2= mysqli_query($conn,"DELETE FROM news_club WHERE news_club_ID  ='$ID'");

}


else if($Page=="champ")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  image  FROM club_shampion WHERE club_shampion_id  ='$ID'");

$images=mysqli_fetch_assoc($query1);

foreach ($images as $image)
{

    $image_dir1 = '../admin/assets/images/'.$image ;

    unlink($image_dir1);
}


$query2= mysqli_query($conn,"DELETE FROM club_shampion WHERE club_shampion_id  ='$ID'");

}


else if($Page=="players")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  image  FROM players WHERE PlayerID   ='$ID'");

$images=mysqli_fetch_assoc($query1);



foreach ($images as $image)
{

    $image_dir1 = '../admin/assets/images/players/'.$image ;

    unlink($image_dir1);
}


$query2= mysqli_query($conn,"DELETE FROM players WHERE PlayerID  ='$ID'");

}



?>