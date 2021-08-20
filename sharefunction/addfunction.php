<?php  

include_once("config.php");
session_start();

$pages=$_POST['page'];

if($pages=="Signup")
{

   $UserName =  $_POST['UserName'];
   $password = $_POST['password'];
   $Email =   $_POST['Email'];
   $Mobile = $_POST['Mobile'];
   $usertype = $_POST['UserType']; 

   if($usertype=="1")
   {


    $query4= mysqli_query($conn,"SELECT  * from accounts order by CompanyCode DESC LIMIT 1"); 

    $usercode= mysqli_fetch_assoc($query4);


    $COMPANYCODE=$usercode['CompanyCode'];

    if($COMPANYCODE==null)

    {
      $CompanyCode=100;

    }

    else
     {

      $CompanyCode=$COMPANYCODE +1;

    }

   }

   else
   {

    $CompanyCode="";



   }
   $Country = $_POST['Country'];
   $Currency = $_POST['Currency'];
//bank 
  $BeneficiaryName = $_POST['BeneficiaryName'];
   $BankName = $_POST['BankName'];
   $BranchName = $_POST['BranchName'];
   $AccountNumber = $_POST['AccountNumber'];
    $IBANNumber = $_POST['IBANNumber'];
    $SwiftCode = $_POST['SwiftCode'];

   $CommercialRegister = $_POST['CommercialRegister'];
   
   $TaxRegisternumber = $_POST['TaxRegisternumber'];
   $CommercialExpDate = $_POST['CommercialExpDate'];
   $City= $_POST['City'];
   $Address = $_POST['Address'];
   $CompanyName = $_POST['CompanyName'];
   $RegisterDate =$_POST['RegisterDate'];

   //img
  $image_name=$_FILES['img']['name'];      
  $image_dir = 'images/user/'.$image_name ;
  $image_db = 'images/user/' .$image_name ;



  $fileToUpload= $_FILES['fileToUpload']['name'];
  $fileToUpload1= $_FILES['fileToUpload1']['name'];
  $fileToUpload2= $_FILES['fileToUpload2']['name'];
  $fileToUpload3= $_FILES['fileToUpload3']['name'];
   
  $pdffile_dir='Files/'.$fileToUpload;
 
  // $imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;
       
    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$pdffile_dir);
    move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],$pdffile_dir);
    move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"],$pdffile_dir);
    move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"],$pdffile_dir);

    


    $sql2="INSERT INTO accounts (UserName,passwords,Email,Mobile,CommercialRegister,CommercialExpDate,UserPhoto,UserStatus,City,Address,Commercial_File,UserType,CompanyCode,CompanyName,RegisterDate,
    Country,Currency,BeneficiaryName,BankName,BranchName,AccountNumber,IBANNumber,SwiftCode,TaxRegisternumber,TradeLicense,UploadNationalID,BankUpload )
    
  VALUES ('$UserName','$password','$Email','$Mobile','$CommercialRegister','$CommercialExpDate','$image_name','1','$City','$Address','$pdffile_dir','$usertype','$CompanyCode','$CompanyName','$RegisterDate',
  '$Country','$Currency','$BeneficiaryName','$BankName','$BranchName','$AccountNumber','$IBANNumber','$SwiftCode','$TaxRegisternumber','$fileToUpload1','$fileToUpload2','$fileToUpload3')";
                                               
  $query=  mysqli_query($conn,$sql2); 

  $user= mysqli_fetch_assoc($query);
   $_SESSION ['id'] = $user ['UserID'];
   $_SESSION['UserName'] = $user['UserName'];
   $_SESSION['password'] = $user['passwords'];
   $_SESSION['Email'] = $user['Email'];
   $_SESSION['UserType'] = $user['UserType'];

}

else if($pages=="sliderimages"){


  $Slider_Description = $_POST['Slider_Description'];
//image 1
  $image_name=$_FILES['img']['name'];      
  $image_dir = 'Website/img/'.$image_name ;
  


  //image 2
  $image_name2=$_FILES['img2']['name'];      
  $image_dir2 = 'Website/img/'.$image_name2 ;
 


  //image 3
  $image_name3=$_FILES['img3']['name'];      
  $image_dir3 = 'Website/img/'.$image_name3 ;
  


  //image 4
  $image_name4=$_FILES['img4']['name'];      
  $image_dir4 = 'Website/img/'.$image_name4 ;
  



     
    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
    move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);
    move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
    move_uploaded_file($_FILES["img4"]["tmp_name"],$image_dir4);

    $sql="INSERT INTO sliderimages (SliderImage1,SliderImage2,SliderImage3,Slider_Image4,	Slider_Description)
    
  VALUES ('$image_dir','$image_dir2','$image_dir3','$image_dir4','$Slider_Description')";
                                               
  $query=  mysqli_query($conn,$sql); 

}











?>