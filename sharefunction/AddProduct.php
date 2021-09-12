


<?php  

include_once("../config.php");


$pages= $_GET['page'];


if($pages=="Product")
{
  
  $cat_id = strip_tags( $_GET['cat_id']);
  
  $Services= strip_tags ($_GET['Services']);
  $CompanyName=strip_tags( $_GET['CompanyName']);

  $UserID =strip_tags( $_GET['UserID']);

  $profilecomp = strip_tags($_GET['profilecomp']);

  $fileToUpload = strip_tags($_GET['fileToUpload']);

  $CatTypeID = strip_tags($_GET['CatTypeID']);

  $SubCatTypeID =strip_tags( $_GET['SubCatTypeID']);

  $Product_Name = strip_tags($_GET['Product_Name']);

  $Description = strip_tags($_GET['Description']);

  $Part_Number = strip_tags($_GET['Part_Number']);

  $Measurement_type  = strip_tags ($_GET['Measurement_type']);

  $Length = strip_tags($_GET['Length']);

  $Diameter = strip_tags($_GET['Diameter']);

  $Out_Side_Diameter = strip_tags($_GET['Out_Side_Diameter']);


  $Width = strip_tags($_GET['Width']);

  $wieght = strip_tags($_GET['wieght']);
  $Hieght = strip_tags($_GET['Hieght']);
  $Size = strip_tags($_GET['Size']);
  $Motorpower = strip_tags($_GET['Motorpower']);

  $Stock = strip_tags($_GET['Stock']);

  $Industry_Country =strip_tags( $_GET['Industry_Country']);

  $Voltage =strip_tags( $_GET['Voltage']);

  $RegisterDate = strip_tags($_GET['RegisterDate']);
  $Product_Warranty =strip_tags( $_GET['Product_Warranty']);
  $Price = strip_tags($_GET['Price']);

  $image_name = strip_tags($_GET['img']);
  $image_name2 = strip_tags($_GET['img2']);
  $image_name3 =strip_tags( $_GET['img3']);
  $image_name4 = strip_tags($_GET['img4']);
  $image_name5 =strip_tags( $_GET['img5']);
  

  $query4= mysqli_query($conn,"SELECT  * from product order by ProductCode DESC LIMIT 1"); 

  $prodcode= mysqli_fetch_assoc($query4);


  $poductYCODE=$prodcode['ProductCode'];

  if($poductYCODE==null)

  {
    $poductYCODE=100;

  }

  else
   {

    $poductYCODE=$poductYCODE +1;

  }




    if($cat_id=="9" )

  {



     $sql="INSERT INTO product(cat_id,UserID,Accept,Refused,CompanyName,AttachFile,CompProfile,Services,ProductCode) 
      
    VALUES ('$cat_id','$UserID','0','0','$CompanyName','$fileToUpload','$profilecomp','$Services','$poductYCODE'
        )";
                                               
  $query=  mysqli_query($conn,$sql); 
                                               
 


    } 
    
    else
    {

      $sql="INSERT INTO product(cat_id,CatTypeID,SubCatID,UserID,Product_Name,Descrip,Accept,Refused,PartNumber,Size, Stocks,Industry_Country,CompanyName,AttachFile,image1,image2,image3, image4, image5,CompProfile,Services,SubCategoryType,
      Measurement_type,Lengths,Diameter,Out_Side_Diameter,Width,wieght,Hieght,Motorpower,Voltage,RegisterDate,Product_Warranty,Price,ProductCode) 
    VALUES ('$cat_id','$CatTypeID','$SubCatID','$UserID','$Product_Name','$Description','0','0','$Part_Number','$Size',' $Stock','$Industry_Country','$CompanyName','$fileToUpload','$image_name','$image_name2','$image_name3','$image_name4','$image_name5','$profilecomp','$Services','$SubCatTypeID',
       '$Measurement_type','$Length','$Diameter','$Out_Side_Diameter','$Width','$wieght','$Hieght','$Motorpower','$Voltage','$RegisterDate','$Product_Warranty','$Price','$poductYCODE')";
                                               
  $query=  mysqli_query($conn,$sql); 




    }


}


?>