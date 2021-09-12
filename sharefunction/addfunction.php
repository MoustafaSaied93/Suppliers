<?php  

include_once("../config.php");
session_start();

$pages= strip_tags($_POST['page']);

if($pages=="Signup")
{

   $UserName = strip_tags( $_POST['UserName']);
   $password = strip_tags($_POST['password']);
   $Email =  strip_tags( $_POST['Email']);
   $Mobile = strip_tags( $_POST['Mobile']);
   $usertype =strip_tags ( $_POST['UserType']); 

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
   $Country = strip_tags ($_POST['Country']);
   $Currency =  strip_tags ($_POST['Currency']);

   $Area = strip_tags($_POST['Area']);

//bank 
  
   $BankName = strip_tags($_POST['BankName']);
   $BranchName = strip_tags( $_POST['BranchName']);
   $AccountNumber = strip_tags ($_POST['AccountNumber']);
    $IBANNumber = strip_tags( $_POST['IBANNumber']);
    $SwiftCode = strip_tags( $_POST['SwiftCode']);

   $CommercialRegister = strip_tags ($_POST['CommercialRegister']);
   
   $CommercialExpDate = strip_tags( $_POST['CommercialExpDate']);

   $City=strip_tags( $_POST['City']);
   $Address = strip_tags ($_POST['Address']);
   $CompanyName = strip_tags( $_POST['CompanyName']);
   $RegisterDate = strip_tags($_POST['RegisterDate']);

  

  $fileToUpload= strip_tags( $_FILES['fileToUpload']['name']);
  $fileToUpload1=strip_tags( $_FILES['fileToUpload1']['name']);
  $fileToUpload2= strip_tags( $_FILES['fileToUpload2']['name']);
    
  $pdffile_dir='../Files/'.$fileToUpload;
 
  // $imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;
       
   

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$pdffile_dir);
    move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],$pdffile_dir);
    move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"],$pdffile_dir);
    

    


    $sql2="INSERT INTO accounts (UserName,passwords,Email,Mobile,CommercialRegister,CommercialExpDate,UserStatus,City,Address,Commercial_File,UserType,CompanyCode,CompanyName,RegisterDate,
    Country,Currency,BankName,BranchName,AccountNumber,IBANNumber,SwiftCode,TradeLicense,UploadNationalID,Area)
    
  VALUES ('$UserName','$password','$Email','$Mobile','$CommercialRegister','$CommercialExpDate','1','$City','$Address','$pdffile_dir','$usertype','$CompanyCode','$CompanyName','$RegisterDate',
  '$Country','$Currency','$BankName','$BranchName','$AccountNumber','$IBANNumber','$SwiftCode','$fileToUpload1','$fileToUpload2','$Area')";
                                               
  $query=  mysqli_query($conn,$sql2); 

  $user= mysqli_fetch_assoc($query);
   $_SESSION ['id'] = $user ['UserID'];
   $_SESSION['UserName'] = $user['UserName'];
   $_SESSION['password'] = $user['passwords'];
   $_SESSION['Email'] = $user['Email'];
   $_SESSION['UserType'] = $user['UserType'];

}












?>