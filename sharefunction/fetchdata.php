<?php 

include_once("../config.php");

$Page= strip_tags($_POST['page']);


if($Page=="Categpry")
{

$ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM categories WHERE cat_id ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["cat_id"] = $row["cat_id"];
  $data["cat_name"] = $row["cat_name"];
  
  }

 echo json_encode($data);
}

else if($Page=="AccountUser")
{

$ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM accounts WHERE UserID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["UserID"] = $row["UserID"];
  $data["UserName"] = $row["UserName"];
  $data["password"] = $row["passwords"];
  $data["Email"] = $row["Email"];

  
  }

  //echo ($data);

echo json_encode($data);
}




else if($Page=="sliderimages")

{

    $ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM sliderimages WHERE Slider_ImageID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["Slider_ImageID"] = $row["Slider_ImageID"];
  $data["SliderImage1"] = $row["SliderImage1"];
  $data["SliderImage2"] = $row["SliderImage2"];
  $data["SliderImage3"] = $row["SliderImage3"];

  $data["Slider_Description"] = $row["Slider_Description"];
  $data["SliderDescription2"] = $row["SliderDescription2"];
  $data["SliderDescription3"] = $row["SliderDescription3"];
  $data["WebsiteInfo"] = $row["WebsiteInfo"];
  $data["SiteMobile"] = $row["SiteMobile"];


 }
 echo json_encode($data);

}

//fetch contact us


else if($Page=="ContactUS")

{

    $ID=strip_tags($_POST['id']);

$query= mysqli_query($conn,"SELECT * FROM contact_us WHERE ContactUsID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["ContactUsID"] = $row["ContactUsID"];
  $data["ContactInfo"] = $row["ContactInfo"];
  $data["OfficeLocation"] = $row["OfficeLocation"];
  $data["OfficeMobile"] = $row["OfficeMobile"];
  $data["OfficeEmail"] = $row["OfficeEmail"];
  $data["OfficeAppointment"] = $row["OfficeAppointment"];
  $data["WorkHours"] = $row["WorkHours"];


 }
 echo json_encode($data);

}


//car category
if($Page=="SystemMessage")
{

$ID=strip_tags($_POST['id']);

//$userid=$_SESSION ['id']


$query= mysqli_query($conn,"SELECT * FROM notfication WHERE NotID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["NotID"] = $row["NotID"];
  $data["Message"] = $row["Message"];

  $data1=$data["Message"];
  
  }

 echo $data1;
}


else if($Page=="SystemClientMessage")

{

    $ID=strip_tags($_POST['id']);

//$userid=$_SESSION ['id']


$query= mysqli_query($conn,"SELECT * FROM clintmessages WHERE MessageID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  $data["MessageID"] = $row["MessageID"];
  $data["Message"] = $row["Message"];

  $data1=$data["Message"];
  
  }

 echo $data1;



}


else if($Page=="ClientMessageexp")

{

    $ID=strip_tags($_POST['id']);

//$userid=$_SESSION ['id']


$query= mysqli_query($conn,"SELECT * FROM clientexp WHERE ClientExpID ='$ID'");

 while($row = mysqli_fetch_array($query))
 {
  
  $data["Message"] = $row["Message"];

  $data1=$data["Message"];
  
  }

 echo $data1;



}






else if($Page=="VendorRequest")

{

    $ID=strip_tags($_POST['id']);


    $result=mysqli_query($conn,"SELECT p.*, a.*, c.*,ct.*,sc.*
     FROM product p INNER JOIN
     accounts a
          ON p.UserID = a.UserID INNER JOIN
          categories c
          ON p.cat_id = c.cat_id  INNER JOIN categorytype ct  ON P.CatTypeID=ct.CatTypeID  
          INNER JOIN subcategory sc on p.SubCatID=sc.SubCatID
           WHERE p.product_id='$ID'");

 while($row = mysqli_fetch_array($result))
 {
  $data["UserName"] = $row["UserName"];
  $data["cat_name"] = $row["cat_name"];
  $data["cat_id"] = $row["cat_id"];
  $data["CatTypeName"] = $row["CatTypeName"];
  $data["SubCategoryName"] = $row["SubCategoryName"];
  $data["SubCategoryType"] = $row["SubCategoryType"];

  $data["Product_Name"] = $row["Product_Name"];
 $data["Descrip"] = $row["Descrip"];
  $data["PartNumber"] = $row["PartNumber"];

  // masurement

  $data["Measurement_type"] = $row["Measurement_type"];
  $data["Lengths"] = $row["Lengths"];
  $data["PartNumber"] = $row["PartNumber"];
  $data["Diameter"] = $row["Diameter"];
  $data["Out_Side_Diameter"] = $row["Out_Side_Diameter"];
  $data["Width"] = $row["Width"];
  $data["wieght"] = $row["wieght"];
  $data["Hieght"] = $row["Hieght"];
  $data["Motorpower"] = $row["Motorpower"];
  $data["Voltage"] = $row["Voltage"];

  $data["Services"] = $row["Services"];
  $data["Stocks"] = $row["Stocks"];
  $data["Industry_Country"] = $row["Industry_Country"];
  $data["CompanyName"] = $row["CompanyName"];
  $data["AttachFile"] = $row["AttachFile"];
  $data["image1"] = $row["image1"];
   $data["image2"] = $row["image2"];
   $data["image3"] = $row["image3"];
   $data["image4"] = $row["image4"];
   $data["CompProfile"] = $row["CompProfile"];
  }

 echo json_encode($data);




}


else if($Page=="Products")

{

    $ID=strip_tags($_POST['id']);


    $result=mysqli_query($conn,"SELECT p.*, a.*
     FROM product p INNER JOIN
     accounts a
          ON p.UserID = a.UserID 
        
           WHERE p.product_id='$ID'");

 while($row = mysqli_fetch_array($result))
 {
 
  $data["cat_id"] = $row["cat_id"];

  $data["CatTypeID"] = $row["CatTypeID"];

  $data["SubCatID"] = $row["SubCatID"];
  $data["SubCategoryType"] = $row["SubCategoryType"];


  $data["Product_Name"] = $row["Product_Name"];
  $data["Descrip"] = $row["Descrip"];
  
  $data["PartNumber"] = $row["PartNumber"];
  $data["Measurement_type"] = $row["Measurement_type"];

  $data["Product_Warranty"] = $row["Product_Warranty"];

  $data["Price"] = $row["Price"];

  

  $data["Industry_Country"] = $row["Industry_Country"];
  $data["CompanyName"] = $row["CompanyName"];

  $data["CompanyCode"] = $row["CompanyCode"];

  $data["AttachFile"] = $row["AttachFile"];
  $data["image1"] = $row["image1"];
  $data["image2"] = $row["image2"];
  $data["image3"] = $row["image3"];
  $data["image4"] = $row["image4"];

  $data["image5"] = $row["image5"];

  $data["CompProfile"] = $row["CompProfile"];


  $data["AttachFile"] = $row["AttachFile"];


  $data["Services"] = $row["Services"];

  $data["Size"] = $row["Size"];
  $data["Stocks"] = $row["Stocks"];

  
 

  $data["Lengths"] = $row["Lengths"];

  $data["Diameter"] = $row["Diameter"];

  $data["Out_Side_Diameter"] = $row["Out_Side_Diameter"];

  $data["Width"] = $row["Width"];
  $data["wieght"] = $row["wieght"];

  $data["Hieght"] = $row["Hieght"];

  $data["Motorpower"] = $row["Motorpower"];

  $data["Voltage"] = $row["Voltage"];

  
  
  }

  echo json_encode($data);





}



 ?>