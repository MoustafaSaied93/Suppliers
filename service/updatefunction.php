<?php 

include_once("config.php");

$Page= strip_tags($_POST['Page']);





 if($Page=="trainer")
{

  
$trainer_id= strip_tags($_POST['trainer_id']);

$trainer_name_ar= strip_tags( $_POST['trainer_name_ar']);
$trainer_name_en= strip_tags( $_POST['trainer_name_en']);

$mobile = strip_tags($_POST['mobile']);

$age = strip_tags($_POST['age']);

$hieght = strip_tags($_POST['hieght']);

$wieght = strip_tags($_POST['wieght']);

$descrip_ar = strip_tags($_POST['descrip_ar']);

$descrip_en = strip_tags($_POST['descrip_en']);

$query2=mysqli_query($conn,"SELECT image FROM trainer  WHERE 	trainer_id='$trainer_id'");

$image=mysqli_fetch_assoc($query2);

$img=$_POST['img'];

if($img=="")

{
  $up_file=$image['image'];


}

if($img!==""){

  $up_file=$_FILES['img']['name'];

}
//uplod img


    
   



  $query= mysqli_query($conn,"UPDATE trainer   SET trainer_name_ar='$trainer_name_ar', trainer_name_en='$trainer_name_en',mobile_number='$mobile',age='$age',hieght='$hieght',wieght='$wieght',
  descrip_ar='$descrip_ar',descrip_en='$descrip_en',
  image='$up_file'  where trainer_id ='$trainer_id'");



  $image_dir = '../admin/assets/images/coach/'.$up_file ;
    
  //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

   move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
}







else if($Page=="subscripe")
{


  
$subid= strip_tags($_POST['subid']);

$startdate = strip_tags($_POST['startdate']);

$enddate = strip_tags($_POST['enddate']);

$price = strip_tags($_POST['price']);



  $query= mysqli_query($conn,"UPDATE subscriptions   SET  startdate='$startdate',enddate='$enddate',

  price='$price' where subid ='$subid'");

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