<?php 

include_once("../config.php");

$Page= strip_tags($_POST['Page']);

if($Page=="Category")
{

$CatID= strip_tags($_POST['CatID']);
$catname= strip_tags($_POST['catname']);
$description= strip_tags($_POST['description']);

$description= strip_tags($_POST['description']);

$oper= strip_tags($_POST['oper']);

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



$product_id= strip_tags($_POST['product_id']);
$cat_id= strip_tags($_POST['cat_id']);

$CatTypeID= strip_tags($_POST['CatTypeID']);

$SubCatID= strip_tags($_POST['SubCatID']);

$SubCatTypeID= strip_tags($_POST['SubCatTypeID']);

$Product_Name= strip_tags($_POST['Product_Name']);
$Measurement_type= strip_tags($_POST['Measurement_type']);
$Part_Number= strip_tags($_POST['Part_Number']);

$description= strip_tags($_POST['description']);

$Product_Warranty= strip_tags($_POST['Product_Warranty']);

$Price= strip_tags($_POST['Price']);

$RegisterDate= strip_tags($_POST['RegisterDate']);

$Size= strip_tags($_POST['Size']);
$Motorpower= strip_tags($_POST['Motorpower']);
$Length= strip_tags($_POST['Length']);
$Diameter= strip_tags($_POST['Diameter']);
$Out_Side_Diameter= strip_tags($_POST['Out_Side_Diameter']);
$Width= strip_tags($_POST['Width']);
$wieght= strip_tags($_POST['wieght']);

$Hieght= strip_tags($_POST['Hieght']);
$Voltage= strip_tags($_POST['Voltage']);

$Stock= strip_tags($_POST['Stock']);


$Industry_Country= strip_tags($_POST['Industry_Country']);



$img= strip_tags($_POST['img']);

$img2= strip_tags($_POST['img2']);
$img3= strip_tags($_POST['img3']);
$img4= strip_tags($_POST['img4']);
$img5= strip_tags($_POST['img5']);

$fileToUpload= strip_tags($_POST['fileToUpload']);


if($fileToUpload=="undefined")

{

   $fileToUpload="undefined";

}

else if($fileToUpload!="undefined")
{
   $fileToUpload= $_FILES['fileToUpload']['name'];

}


if($img=="undefined")

{

   $img="undefined";

}

else if($img!="undefined")
{
   $img= $_FILES['img']['name'];

}

if($img2=="undefined")

{

   $img2="undefined";

}

else if($img2!="undefined")
{
   $img2= $_FILES['img2']['name'];

}


if($img3=="undefined")

{

   $img3="undefined";

}

else if($img3!="undefined")
{
   $img3= $_FILES['img3']['name'];

}


if($img4=="undefined")

{

   $img4="undefined";

}

else if($img4!="undefined")
{
   $img4= $_FILES['img4']['name'];

}



if($img5=="undefined")

{

   $img5="undefined";

}

else if($img5!="undefined")
{
   $img5= $_FILES['img5']['name'];

}











if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img'  WHERE product_id='$product_id'");

}


else if($fileToUpload=="undefined"  && $img=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image2='$img2'  WHERE product_id='$product_id'");

}


else if($fileToUpload=="undefined"  && $img=="undefined" && $img2=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image3='$img3'  WHERE product_id='$product_id'");

}


else if($fileToUpload=="undefined"  && $img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image4='$img4'  WHERE product_id='$product_id'");

}


else if($fileToUpload=="undefined"  && $img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5'  WHERE product_id='$product_id'");

}








else if( $img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload' WHERE product_id='$product_id'");


}


else if($img2=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image1='$img' WHERE product_id='$product_id'");


}


else if($img=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image2='$img2' WHERE product_id='$product_id'");


}


else if($img=="undefined" && $img2=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image3='$img3' WHERE product_id='$product_id'");


}

else if($img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image4='$img4' WHERE product_id='$product_id'");


}


else if($img=="undefined" && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image5='$img5' WHERE product_id='$product_id'");


}


else if($fileToUpload=="undefined" && $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img3=="undefined" && $img2=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image4='$img4' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image3='$img3',image4='$img4' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" && $img3=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image4='$img4' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image3='$img3' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image2='$img2' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img2=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image1='$img' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image3='$img3' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img4=="undefined" && $img2=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image3='$img3',image1='$img' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image3='$img3',image2='$img2' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image4='$img4',image2='$img2' WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image3='$img3'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image4='$img4'  WHERE product_id='$product_id'");


}


else if($fileToUpload=="undefined" && $img=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image2='$img2',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image2='$img2',image3='$img3',image5='$img5'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img=="undefined" && $img2=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img5=="undefined" && $img2=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined" && $img4=="undefined" && $img2=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image3='$img3',image5='$img5'  WHERE product_id='$product_id'");


}

else if( $img3=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image1='$img', image2='$img2' WHERE product_id='$product_id'");


}

else if( $img2=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image1='$img', image3='$img3' WHERE product_id='$product_id'");


}

else if( $img2=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image1='$img', image5='$img5' WHERE product_id='$product_id'");


}

else if( $img2=="undefined" && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image1='$img', image4='$img4' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img4=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image2='$img2', image3='$img3' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img2=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image4='$img4', image3='$img3' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img2=="undefined" && $img3=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image4='$img4', image5='$img5' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img2=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image3='$img3', image5='$img5' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img3=="undefined" && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image4='$img4', image2='$img2' WHERE product_id='$product_id'");


}

else if( $img=="undefined" && $img3=="undefined" && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload',image2='$img2', image5='$img5' WHERE product_id='$product_id'");


}
else if($fileToUpload=="undefined"  && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image2='$img2',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img2=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image1='$img',image3='$img3',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img3=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image1='$img',image2='$img2',image4='$img4'  WHERE product_id='$product_id'");


}

else if($fileToUpload=="undefined"  && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image1='$img',image2='$img2',image3='$img3'  WHERE product_id='$product_id'");


}

else if($img4=="undefined"  && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image3='$img3',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img3=="undefined"  && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image4='$img4',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img2=="undefined"  && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image3='$img3',image5='$img5',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img2=="undefined"  && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image3='$img3',image4='$img4',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img=="undefined"  && $img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image2='$img2',image3='$img3',image4='$img4',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img=="undefined"  && $img2=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image3='$img3',image4='$img4',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img=="undefined"  && $img3=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image2='$img2',image4='$img4',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}

else if($img=="undefined"  && $img4=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image5='$img5',image2='$img2',image3='$img3',AttachFile='$fileToUpload'  WHERE product_id='$product_id'");


}


else if($fileToUpload=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image3='$img3',image4='$img4',image5='$img5' WHERE product_id='$product_id'");


}

else if($img5=="undefined" )  
{

$query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country' ,SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',image1='$img',image2='$img2',image3='$img3',image4='$img4',AttachFile='$fileToUpload' WHERE product_id='$product_id'");


}





else
{
   $query= mysqli_query($conn,"UPDATE product SET cat_id='$cat_id',CatTypeID='$CatTypeID',SubCatID='$SubCatID',Product_Name='$Product_Name',Descrip='$description',PartNumber='$Part_Number',Size='$Size',Stocks='$Stock',Industry_Country='$Industry_Country',image1='$img',image2='$img2',image3='$img3',image4='$img4',image5='$img5',SubCategoryType='$SubCatTypeID',Measurement_type='$Measurement_type',
Lengths='$Length',Diameter='$Diameter',Out_Side_Diameter='$Out_Side_Diameter',Width='$Width',wieght='$wieght',Hieght='$Hieght',Motorpower='$Motorpower',Voltage='$Voltage',RegisterDate='$RegisterDate',Product_Warranty='$Product_Warranty',Price='$Price',AttachFile='$fileToUpload' WHERE product_id='$product_id'");

}





$pdffile_dir='../Files/'.$fileToUpload;

$image_dir = '../images/products/'.$img;

$image_dir2 = '../images/products/'.$img2;

$image_dir3 = '../images/products/'.$img3;

$image_dir4 = '../images/products/'.$img4;

$image_dir5 = '../images/products/'.$img5;


if($fileToUpload!="undefined")
{


  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$pdffile_dir);
}


if($img!="undefined")
{


  move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
}

if($img2!="undefined")
{


  move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);
}

if($img3!="undefined")
{


  move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
}

if($img4!="undefined")
{


  move_uploaded_file($_FILES["img4"]["tmp_name"],$image_dir4);
}

if($img5!="undefined")
{


  move_uploaded_file($_FILES["img5"]["tmp_name"],$image_dir5);
}




}



else if($Page=="manifac")
{


$product_id= strip_tags($_POST['product_id']);

$cat_id= strip_tags($_POST['cat_id']);


$Services= strip_tags($_POST['Services']);

$RegisterDate= strip_tags($_POST['RegisterDate']);




$oper= strip_tags($_POST['oper']);

if($oper=='noimage-nofile')

{

 $query= mysqli_query($conn,"UPDATE product  SET cat_id='$cat_id',Services='$Services',RegisterDate='$RegisterDate'  where product_id='$product_id'");
}



else if($oper=='file')

{

 $fileToUpload= strip_tags( $_FILES['fileToUpload']['name']);
   
   $pdffile_dir='../Files/'.$fileToUpload;



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

   $profilecomp=strip_tags($_FILES['profilecomp']['name']);      
   $image_dir6 = '../images/user/'.$profilecomp ;


 



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

   $profilecomp= strip_tags($_FILES['profilecomp']['name']);      
   $image_dir6 = '../images/user/'.$profilecomp ;




   $fileToUpload=strip_tags ( $_FILES['fileToUpload']['name']);
   
   $pdffile_dir='../Files/'.$fileToUpload;
 



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
  

  








else if($Page=="AcceptRequestVendor")
{
  
$ProductID= strip_tags($_POST['ID']);

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

  
$UserID= strip_tags($_POST['UserID']);

$UserName = strip_tags($_POST['UserName']);

$password= strip_tags($_POST['password']);

$Email= strip_tags($_POST['Email']);

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
  
$ProductsID= strip_tags($_POST['ID']);

$UserID= strip_tags($_POST['UserID']);

$Message= strip_tags($_POST['Message']);

$query3= mysqli_query($conn,"SELECT * FROM product  where product_id ='$ProductsID'");


$row=mysqli_fetch_assoc($query3);

$ProductName=$row['Product_Name'];



  $query= mysqli_query($conn,"UPDATE product  SET  Refused='1'  , Accept='0' where product_id ='$ProductsID'");

  $query2= mysqli_query($conn,"INSERT INTO Notfication(UserID,Message,ProductName)
  
  VALUES ('$UserID','$Message','$ProductName')");
  

}
 ?>