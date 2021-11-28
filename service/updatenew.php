<?php

include_once("config.php");

$Page=  strip_tags($_POST['Page']);


if($Page=="news")
{
  
$news_club_ID= strip_tags($_POST['news_club_ID']);

$Tille = strip_tags($_POST['Tille']);

$PublishDate= strip_tags($_POST['PublishDate']);



$New= strip_tags($_POST['New']);


 
$query1=mysqli_query($conn,"SELECT  image1,image2,image3,image4,image5,image6,image7,image8 FROM news_club WHERE news_club_ID ='$news_club_ID'");

$images=mysqli_fetch_assoc($query1);

$image1=$_POST['img1'];
$image2=$_POST['img2'];
$image3=$_POST['img3'];
$image4=$_POST['img4'];
$image5=$_POST['img5'];
$image6=$_POST['img6'];
$image7=$_POST['img7'];
$image8=$_POST['img8'];


if($image1=="")
{
  $img1=$images['image1'];

}

if($image1!==""){

  $img1=$_FILES['img1']['name'];

}

if($image2=="")
{
  $img2=$images['image2'];

}

if($image2!==""){

  $img2=$_FILES['img2']['name'];

}

if($image3=="")
{
  $img3=$images['image3'];

}

if($image3!==""){

  $img3=$_FILES['img3']['name'];
}

if($image4=="")
{
  $img4=$images['image4'];

}

if($image4!==""){

  $img4=$_FILES['img4']['name'];
}

if($image5=="")
{
  $img5=$images['image5'];

}

if($image5!==""){

  $img5=$_FILES['img5']['name'];
}

if($image6=="")
{
  $img6=$images['image6'];

}

if($image6!==""){

  $img6=$_FILES['img6']['name'];
}

if($image7=="")
{
  $img7=$images['image7'];

}

if($image7!==""){

  $img7=$_FILES['img7']['name'];
}

if($image8=="")
{
  $img8=$images['image8'];

}
if($image8!==""){

  $img8=$_FILES['img8']['name'];
}
  $query= mysqli_query($conn,"UPDATE news_club   SET Tille='$Tille', New='$New',PublishDate='$PublishDate',image1='$img1',
  image2='$img2',image3='$img3',image4='$img4',image5='$img5',image6='$img6',image7='$img7',image8='$img8'
   
    where news_club_ID ='$news_club_ID'");

  //uploading file

  foreach($_FILES as $file) 


  if($file!="")
  {


 $image_dir = '../admin/assets/images/news/'.$file['name'];

 move_uploaded_file($file["tmp_name"],$image_dir);
  }



}








?>