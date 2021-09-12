<?php

include_once("../config.php");

$Page=strip_tags($_POST['page']);


if($Page=="Categpry")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM categories WHERE cat_id ='$ID'");

}


else if($Page=="SystemMessage")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM notfication WHERE NotID  ='$ID'");

}

else if($Page=="ClientMessage")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM clintmessages WHERE MessageID  ='$ID'");

}

else if($Page=="ExpClientMessage")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM clientexp WHERE ClientExpID ='$ID'");

}



else if($Page=="Product")
{

$ID= strip_tags($_POST['ID']);


$query1= mysqli_query($conn,"SELECT * FROM product WHERE product_id  ='$ID'");





while($row = mysqli_fetch_array($query1))
 {

    $CATID=$row["cat_id"];

    $Compimg=$row["CompProfile"];


    $upladF=$row["AttachFile"];

    $image_name1=$row["image1"];
    $image_name2=$row["image2"];
    $image_name3=$row["image3"];
    $image_name4=$row["image4"];
    $image_name5=$row["image5"];


    $image_dir6 = '../images/user/'.$Compimg;


    $pdffile_dir='../Files/'.$upladF.'';

    $image_dir1 = '../images/products/'.$image_name1 ;

    $image_dir2 = '../images/products/'.$image_name2 ;

    $image_dir3 = '../images/products/'.$image_name3 ;

    $image_dir4 = '../images/products/'.$image_name4 ;

    $image_dir5 = '../images/products/'.$image_name5 ;


    unlink($pdffile_dir);
    //unlink($image_dir6);
   // unlink($image_dir1);
   // unlink($image_dir2);
    //unlink($image_dir3);
    //unlink($image_dir4);
    //unlink($image_dir5);


 }


 $query2= mysqli_query($conn,"DELETE FROM product WHERE product_id  ='$ID'");




}


else if($Page=="Accounts")
{

$ID= strip_tags($_POST['ID']);

$query= mysqli_query($conn,"DELETE FROM accounts WHERE UserID  ='$ID'");

}

?>