
<?php  

include_once("config.php");
session_start();

$pages=$_POST['page'];


if($pages=="Product")
{
  
  $cat_id =  $_POST['cat_id'];
  $CatTypeID =  $_POST['CatTypeID'];
  $SubCatID =  $_POST['SubCatID'];
  $SubCatTypeID = $_POST['SubCatTypeID'];
  $Product_Name= $_POST['Product_Name'];
  
  $Description = $_POST['Description'];

  $RegisterDate = $_POST['RegisterDate'];
  $Product_Warranty = $_POST['Product_Warranty'];


  $Part_Number = $_POST['Part_Number'];
  //measure 
  
  $Size = $_POST['Size'];
  $Diameter=  $_POST['Diameter'];
  $Width=  $_POST['Width'];
  $Measurement_type=  $_POST['Measurement_type'];
  $Length=  $_POST['Length'];
  $Out_Side_Diameter=  $_POST['Out_Side_Diameter'];
  $wieght=  $_POST['wieght'];
  $Hieght=  $_POST['Hieght'];
  $Motorpower=  $_POST['Motorpower'];

  $Voltage=$_POST['Voltage'];

  $Stock = $_POST['Stock'];
  $Industry_Country = $_POST['Industry_Country'];
  $Services=  $_POST['Services'];
  $CompanyName= $_POST['CompanyName'];
  $fileToUpload= $_POST['fileToUpload'];

  if (isset($_SESSION['id']))
	{

  $UserID = $_SESSION['id'];

  }
//image1
  $image_name=$_FILES['img']['name'];      
  $image_dir = 'images/products/'.$image_name ;
  //image2
  $image_name2=$_FILES['img2']['name'];      
  $image_dir2 = 'images/products/'.$image_name2 ;

  //image3
  $image_name3=$_FILES['img3']['name'];      
  $image_dir3 = 'images/products/'.$image_name3 ;


   //image4
   $image_name4=$_FILES['img4']['name'];      
   $image_dir4 = 'images/products/'.$image_name4 ;


   //image5
   $image_name5=$_FILES['img5']['name'];      
   $image_dir5 = 'images/products/'.$image_name5 ;

// profile comp
   $profilecomp=$_FILES['profilecomp']['name'];      
   $image_dir6 = 'images/user/'.$profilecomp ;
 
   $fileToUpload= $_FILES['fileToUpload']['name'];
   
   $pdffile_dir='Files/'.$fileToUpload;
    
    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
    move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);
    move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
    move_uploaded_file($_FILES["img4"]["tmp_name"],$image_dir4);
    move_uploaded_file($_FILES["img5"]["tmp_name"],$image_dir5);
    move_uploaded_file($_FILES["profilecomp"]["tmp_name"],$image_dir6);

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$pdffile_dir);

    if($cat_id=="9" )

    {

      $sql="INSERT INTO product(cat_id,UserID,Accept,Refused,CompanyName,AttachFile,CompProfile,Services) 
      
    VALUES ('$cat_id','$UserID','0','0','$CompanyName','$fileToUpload','$profilecomp','$Services'
        )";
                                               
  $query=  mysqli_query($conn,$sql); 
    }

    else
    {

      $sql="INSERT INTO product(cat_id,CatTypeID,SubCatID,UserID,Product_Name,Descrip,Accept,Refused,PartNumber,Size, Stocks,Industry_Country,CompanyName,AttachFile,image1,image2,image3, image4, image5,CompProfile,Services,SubCategoryType,
      Measurement_type,Lengths,Diameter,Out_Side_Diameter,Width,wieght,Hieght,Motorpower,Voltage,RegisterDate,Product_Warranty) 
    VALUES ('$cat_id','$CatTypeID','$SubCatID','$UserID','$Product_Name','$Description','0','0','$Part_Number','$Size',' $Stock','$Industry_Country','$CompanyName','$fileToUpload','$image_name','$image_name2','$image_name3','$image_name4','$image_name5','$profilecomp','$Services','$SubCatTypeID',
       '$Measurement_type','$Length','$Diameter','$Out_Side_Diameter','$Width','$wieght','$Hieght','$Motorpower','$Voltage','$RegisterDate','$Product_Warranty')";
                                               
  $query=  mysqli_query($conn,$sql); 


    }

    
    

}


?>