<?php

include_once("config.php");

$Page=$_POST['page'];


if($Page=="Categpry")
{

$ID=$_POST['ID'];

$query= mysqli_query($conn,"DELETE FROM categories WHERE cat_id ='$ID'");

}


else if($Page=="SystemMessage")
{

$ID=$_POST['ID'];

$query= mysqli_query($conn,"DELETE FROM notfication WHERE NotID  ='$ID'");

}

else if($Page=="ClientMessage")
{

$ID=$_POST['ID'];

$query= mysqli_query($conn,"DELETE FROM clintmessages WHERE MessageID  ='$ID'");

}



else if($Page=="Product")
{

$ID=$_POST['ID'];

$query= mysqli_query($conn,"DELETE FROM product WHERE product_id  ='$ID'");



$pdffile_dir='Files/561B-data (1).pdf';

 unlink($pdffile_dir);



//$query2= mysqli_query($conn,"SELECT * FROM product WHERE product_id  ='$ID'");















}


else if($Page=="Accounts")
{

$ID=$_POST['ID'];

$query= mysqli_query($conn,"DELETE FROM accounts WHERE UserID  ='$ID'");

}

?>