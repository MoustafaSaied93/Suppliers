<?php

include_once("config.php");

$Page=strip_tags($_POST['page']);


if($Page=="subscribe")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM subscriptions WHERE subid   ='$ID'");

$query3= mysqli_query($conn,"DELETE FROM inventory WHERE subid   ='$ID'");



}



else if($Page=="techniqalteam")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  image  FROM trainer WHERE trainer_id  ='$ID'");




$images=mysqli_fetch_assoc($query1);


$LOGO=$images['image'];



    $image_dir1 = '../admin/assets/images/coach/'.$LOGO;

    unlink($image_dir1);


$query= mysqli_query($conn,"DELETE FROM trainer WHERE trainer_id ='$ID'");





}


else if($Page=="class")

{

$ID= strip_tags($_POST['ID']);

$query1=mysqli_query($conn,"SELECT  image  FROM classes WHERE class_id  ='$ID'");




$images=mysqli_fetch_assoc($query1);


$LOGO=$images['image'];



    $image_dir1 = '../admin/assets/images/'.$LOGO;

    unlink($image_dir1);


$query= mysqli_query($conn,"DELETE FROM classes WHERE class_id ='$ID'");





}








else if($Page=="players")

{

$ID= strip_tags($_POST['ID']);



$query2= mysqli_query($conn,"DELETE FROM members_subscribtions WHERE memberid  ='$ID'");

}


else if($Page=="inventory")

{

$ID= strip_tags($_POST['ID']);



$query2= mysqli_query($conn,"DELETE FROM inventory WHERE inventory_id   ='$ID'");

}



?>