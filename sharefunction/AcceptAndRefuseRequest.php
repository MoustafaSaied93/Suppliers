<?php

include_once("config.php");


$Page=$_POST['Page'];

 if($Page=="VendorRefusedRequest")
{
  
$ProductsID=$_POST['ID'];

  $query= mysqli_query($conn,"UPDATE `product` SET `Accept` = '0', `Refused` = '1' WHERE `product`.`product_id` = '$ProductsID'");


}


else if($Page=="VendorAcceptRequest")
{
  
$ProductsID=$_POST['ID'];

  $query= mysqli_query($conn,"UPDATE `product` SET `Accept` = '1', `Refused` = '0' WHERE `product`.`product_id` = '$ProductsID'");


}


else if($Page=="VendorDeleteRequest")
{
  
$ProductsID=$_POST['ID'];

  $query= mysqli_query($conn,"DELETE FROM product   WHERE `product`.`product_id` = '$ProductsID'");


}

?>