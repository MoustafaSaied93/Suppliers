<?php 

include_once("config.php");

$Page=$_POST['Page'];

if($Page=="Category")
{

$CatID=$_POST['CatID'];
$catname=$_POST['catname'];
$description=$_POST['description'];

$description=$_POST['description'];

$oper=$_POST['oper'];

if($oper=='noimage')

{

 $query= mysqli_query($conn,"UPDATE categories  SET cat_name='$catname',cat_desc='$description' where cat_id='$CatID'");
}

else

{
$image_name=$_FILES['img']['name'];

 $imagepath  = 'images/category-slider/'.$image_name ;
   if(file_exists($imagepath))
   {

       $query= mysqli_query($conn,"UPDATE categories  SET cat_name='$catname',cat_desc='$description',image='$imagepath' where cat_id='$CatID'");

   }

   else

   {

   	 move_uploaded_file($_FILES["img"]["tmp_name"],$imagepath);

$query= mysqli_query($conn,"UPDATE categories  SET cat_name='$catname',cat_desc='$description' ,image='$imagepath' where cat_id='$CatID'");


   }
}

}

if($Page=="allproduct")
{



$product_id=$_POST['product_id'];
$cat_id=$_POST['cat_id'];

$CatTypeID=$_POST['CatTypeID'];

$SubCatID=$_POST['SubCatID'];

$SubCatTypeID=$_POST['SubCatTypeID'];

$Product_Name=$_POST['Product_Name'];
$Measurement_type=$_POST['Measurement_type'];
$Part_Number=$_POST['Part_Number'];

$description=$_POST['description'];

$Product_Warranty=$_POST['Product_Warranty'];
$RegisterDate=$_POST['RegisterDate'];

$Size=$_POST['Size'];
$Motorpower=$_POST['Motorpower'];
$Length=$_POST['Length'];
$Diameter=$_POST['Diameter'];
$Out_Side_Diameter=$_POST['Out_Side_Diameter'];
$Width=$_POST['Width'];
$wieght=$_POST['wieght'];

$Hieght=$_POST['Hieght'];
$Voltage=$_POST['Voltage'];

$Stock=$_POST['Stock'];


$Industry_Country=$_POST['Industry_Country'];



$img=$_POST['img'];

$img2=$_POST['img2'];
$img3=$_POST['img3'];
$img4=$_POST['img4'];
$img5=$_POST['img5'];

$fileToUpload=$_POST['fileToUpload'];



$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country',image1='$img',image2='$img2',image3='$img3',image4='$img4',image5='$img5',SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty', AttachFile='$fileToUpload' WHERE product_id='$product_id'");


$array = array($img,$img2,$img3,$img4,$img5);

foreach($array as $value) {

   $image_dir= 'images/user/'.$value ;



   if (!file_exists($image_dir)) {


      move_uploaded_file($value,$image_dir );

  
      }



  
}


$pdffile_dir='Files/'.$fileToUpload;



if (!file_exists($pdffile_dir)) {


   move_uploaded_file($fileToUpload,$pdffile_dir );


   }






}



else if($Page=="manifac")
{


$product_id=$_POST['product_id'];

$cat_id=$_POST['cat_id'];


$Services=$_POST['Services'];

$RegisterDate=$_POST['RegisterDate'];




$oper=$_POST['oper'];

if($oper=='noimage-nofile')

{

 $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate'  where product_id='$product_id'");
}



else if($oper=='file')

{

 $fileToUpload= $_FILES['fileToUpload']['name'];
   
   $pdffile_dir='Files/'.$fileToUpload;



   if(file_exists($pdffile_dir))
   {

      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',AttachFile='$fileToUpload'  where product_id='$product_id'");
    }


    else
    {


      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$pdffile_dir);

      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',AttachFile='$fileToUpload'  where product_id='$product_id'");



    }

   
   }


else if($oper=='image')

{

   $profilecomp=$_FILES['profilecomp']['name'];      
   $image_dir6 = 'images/user/'.$profilecomp ;


 



   if(file_exists($image_dir6 ))
   {

      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',CompProfile='$profilecomp'  where product_id='$product_id'");
    }


    else
    {


      move_uploaded_file($_FILES["profilecomp"]["tmp_name"],$image_dir6 );
      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',CompProfile='$profilecomp'  where product_id='$product_id'");



    }

   
   }



   else if($oper=='image-file')

{

   $profilecomp=$_FILES['profilecomp']['name'];      
   $image_dir6 = 'images/user/'.$profilecomp ;




   $fileToUpload= $_FILES['fileToUpload']['name'];
   
   $pdffile_dir='Files/'.$fileToUpload;
 



   if(file_exists($image_dir6|| $pdffile_dir ))
   {

      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',CompProfile='$profilecomp',AttachFile='$fileToUpload'  where product_id='$product_id'");
    }


    else
    {


      move_uploaded_file($_FILES["profilecomp"]["tmp_name"],$image_dir6 );

      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pdffile_dir );
      
      $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate',CompProfile='$profilecomp',AttachFile='$fileToUpload'  where product_id='$product_id'");



    }

   
   }


}
  

  




else if($Page=="sliderimages")
{

$Slider_ImageID=$_POST['Slider_ImageID'];

$Slider_Description=$_POST['Slider_Description'];
$Slider_Description2=$_POST['SliderDescription2'];
$Slider_Description3=$_POST['SliderDescription3'];


$WebsiteInfo=$_POST['WebsiteInfo'];
$SiteMobile=$_POST['SiteMobile'];



$oper=$_POST['oper'];

if($oper=='noimage')

{

 $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
 SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile'  where Slider_ImageID='1'");
}

else if($oper=='image')

{
$image_name=$_FILES['img']['name'];
$image_name2=$_FILES['img2']['name'];
$image_name3=$_FILES['img3']['name'];


$image_dir = 'assets/images/'.$image_name ;
$image_dir2= 'assets/images/'.$image_name2 ;

$image_dir3= 'assets/images/'.$image_name3 ;

   if(file_exists($image_dir2&&$image_dir2 &&$image_dir3))
   {

       $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
       SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage2='$image_dir2',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");

   }

  

   else

   {

   	 move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
      move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);

      move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
     
      $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
      SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage2='$image_dir2',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");

   }

   
  }

else if($oper=='image1')

{
$image_name=$_FILES['img']['name'];
//$image_name2=$_FILES['img2']['name'];


$image_dir = 'assets/images/'.$image_name ;
//$image_dir2= 'assets/images/'.$image_name2 ;

//$image_dir3= 'assets/images/'.$image_name3 ;


   if(file_exists( $image_dir))
   {

    $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
    SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir' where Slider_ImageID='$Slider_ImageID'");

   }

  

   else

   {
      move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
      
     
      $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
    SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir' where Slider_ImageID='$Slider_ImageID'");

   }

   
  }


  else if($oper=='image2')

{
$image_name2=$_FILES['img2']['name'];



$image_dir2 = 'assets/images/'.$image_name2 ;




   if(file_exists($image_dir2))
   {

    $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
    SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage2='$image_dir2' where Slider_ImageID='$Slider_ImageID'");

   }

  

   else

   {

   	 move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);

     
   
      $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
      SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage2='$image_dir2' where Slider_ImageID='$Slider_ImageID'");

   }

  }


  else if($oper=='image3')

  {
  
  
  $image_name3=$_FILES['img3']['name'];
  
  
  $image_dir3 = 'assets/images/'.$image_name3 ;
  
  
  
  
  
  
     if(file_exists($image_dir3))
     {
  
      $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
      SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
  
     }
  
    
  
     else
  
     {
  
        move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
  
      
     
       
        $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
      SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
  
     }
  
    }


    else if($oper=='image1-image2')

    {
    
    
    $image_name=$_FILES['img']['name'];

    $image_name2=$_FILES['img2']['name'];
    
    
    $image_dir = 'assets/images/'.$image_name ;

    $image_dir2 = 'assets/images/'.$image_name2 ;
    
    
    
    
    
    
       if(file_exists($image_dir&&$image_dir2 ))
       {
    
        $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
        SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage2='$image_dir2' where Slider_ImageID='$Slider_ImageID'");
    
       }
    
      
    
       else
    
       {
    
          move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

          move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);      
          $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
          SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage2='$image_dir2' where Slider_ImageID='$Slider_ImageID'");
    
       }
    
      }



      else if($oper=='image1-image3')

    {
    
    
    $image_name=$_FILES['img']['name'];

    $image_name3=$_FILES['img3']['name'];
    
    
    $image_dir = 'assets/images/'.$image_name ;

    $image_dir3 = 'assets/images/'.$image_name3 ;
    
    
    
    
    
    
       if(file_exists($image_dir&&$image_dir3 ))
       {
    
        $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
        SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
    
       }
    
      
    
       else
    
       {
    
          move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

          move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);      
          $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
          SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage1='$image_dir',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
    
       }
    
      }



      else if($oper=='image2-image3')

      {
      
      
      $image_name2=$_FILES['img2']['name'];
  
      $image_name3=$_FILES['img3']['name'];
      
      
      $image_dir2 = 'assets/images/'.$image_name2 ;
  
      $image_dir3 = 'assets/images/'.$image_name3 ;
      
      
      
      
      
      
         if(file_exists($image_dir2&&$image_dir3 ))
         {
      
          $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
          SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage2='$image_dir2',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
      
         }
      
        
      
         else
      
         {
      
            move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);
  
            move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);      
            $query= mysqli_query($conn,"UPDATE sliderimages  SET Slider_Description='$Slider_Description',SliderDescription2='$Slider_Description2',
            SliderDescription3='$Slider_Description3',WebsiteInfo='$WebsiteInfo',SiteMobile='$SiteMobile',SliderImage2='$image_dir2',SliderImage3='$image_dir3' where Slider_ImageID='$Slider_ImageID'");
      
         }
      
        }





}


else if($Page=="AcceptRequestVendor")
{
  
$ProductID=$_POST['ID'];

$UserID=$_POST['UserID'];

$Message="تم قبول طلبك بنجاح" ;

$query3= mysqli_query($conn,"SELECT * FROM product  where product_id ='$ProductID'");


$row=mysqli_fetch_assoc($query3);

$ProductName=$row['Product_Name'];

  $query= mysqli_query($conn,"UPDATE product  SET  Refused='0', Accept='1' where product_id ='$ProductID'");


  $query2= mysqli_query($conn,"INSERT INTO Notfication(UserID,Message,ProductName)
  
  VALUES ('$UserID','$Message','$ProductName')");



}


else if($Page=="AccountUser")
{

  
$UserID=$_POST['UserID'];

$UserName =$_POST['UserName'];

$password=$_POST['password'];

$Email=$_POST['Email'];

$sql=mysqli_query($conn,"SELECT * FROM accounts WHERE Email= '$Email' and UserID !=$UserID");


if(mysqli_num_rows($sql)>0)
{

	$errorMSG = 202;

	echo json_encode($errorMSG);
}

else
{
  $query= mysqli_query($conn,"UPDATE accounts  SET UserName='$UserName', passwords='$password',Email='$Email'  where UserID ='$UserID'");

}

}












else if($Page=="RefusedRequest")
{
  
$ProductsID=$_POST['ID'];

$UserID=$_POST['UserID'];

$Message=$_POST['Message'];

$query3= mysqli_query($conn,"SELECT * FROM product  where product_id ='$ProductsID'");


$row=mysqli_fetch_assoc($query3);

$ProductName=$row['Product_Name'];



  $query= mysqli_query($conn,"UPDATE product  SET  Refused='1'  , Accept='0' where product_id ='$ProductsID'");

  $query2= mysqli_query($conn,"INSERT INTO Notfication(UserID,Message,ProductName)
  
  VALUES ('$UserID','$Message','$ProductName')");
  

}


else if($Page=="ContactUS")
{
  
$ContactUsID=$_POST['ContactUsID'];

$ContactInfo=$_POST['ContactInfo'];
$OfficeLocation=$_POST['OfficeLocation'];
$OfficeMobile=$_POST['OfficeMobile'];
$OfficeEmail=$_POST['OfficeEmail'];
$OfficeAppointment=$_POST['OfficeAppointment'];
$WorkHours=$_POST['WorkHours'];


  $query= mysqli_query($conn,"UPDATE contact_us  SET ContactInfo='$ContactInfo',OfficeLocation='$OfficeLocation',OfficeMobile='$OfficeMobile',OfficeEmail='$OfficeEmail',OfficeAppointment='$OfficeAppointment',WorkHours='$WorkHours'  where ContactUsID ='$ContactUsID'");

  

}
 ?>