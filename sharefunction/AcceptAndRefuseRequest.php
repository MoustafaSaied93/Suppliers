<?php

include_once("../config.php");


$Page= strip_tags($_POST['Page']);

 if($Page=="VendorRefusedRequest")
{
  
$ProductsID= strip_tags($_POST['ID']);

  $query= mysqli_query($conn,"UPDATE `product` SET `Accept` = '0', `Refused` = '1' WHERE `product`.`product_id` = '$ProductsID'");


}


else if($Page=="VendorAcceptRequest")
{
  
$ProductsID = strip_tags($_POST['ID']);

  $query= mysqli_query($conn,"UPDATE `product` SET `Accept` = '1', `Refused` = '0' WHERE `product`.`product_id` = '$ProductsID'");


}


else if($Page=="VendorDeleteRequest")
{
  
$ProductsID= strip_tags($_POST['ID']);

  $query= mysqli_query($conn,"DELETE FROM product   WHERE `product`.`product_id` = '$ProductsID'");


}

?>