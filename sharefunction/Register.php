<?php

session_start();
include('../config.php');

$pages=$_POST['page'];

if($pages=="registercustomer"){


    $UserName =  $_POST['UserName'];
     $password = $_POST['password'];
     $Email =   $_POST['Email'];
  
     $Mobile = $_POST['Mobile'];
  
     $Address = $_POST['Address'];
  
     $RegisterDate= $_POST['RegisterDate'];
  
     $UserType = $_POST['UserType'];
  
     $sql=mysqli_query($conn,"SELECT * FROM accounts WHERE Email= '$Email'");
     $sql2=mysqli_query($conn,"SELECT * FROM accounts WHERE Mobile= '$Mobile'");
  
  
    if(mysqli_num_rows($sql)>0)
  {
  
      $errorMSG = 200;
  
      echo json_encode($errorMSG);
  }
  
  else if(mysqli_num_rows($sql2)>0)
  {
  
      $errorMSG = 201;
  
      echo json_encode($errorMSG);
  }
  
  else
  
  {
  
    $sql2="INSERT INTO accounts (UserName,passwords,Email,Mobile,UserType,UserStatus,RegisterDate,Address )
      
    VALUES ('$UserName','$password','$Email','$Mobile','$UserType','1','$RegisterDate','$Address')";
                                                 
    $query=  mysqli_query($conn,$sql2); 
  
    $user= mysqli_fetch_assoc($query);
         $_SESSION ['id'] = $user ['UserID'];
          $_SESSION['UserName'] = $user['UserName'];
          $_SESSION['password'] = $user['passwords'];
          $_SESSION['Email'] = $user['Email'];
          $_SESSION['UserType'] = $user['UserType'];
  
  
  
  
  }

}

else if($pages=="SendClientMessage"){


    $Name =  $_POST['Name'];
    $Email =   $_POST['Email'];
  
     $Mobile = $_POST['Mobile'];
  
     $Subject = $_POST['Subject'];

     $Message= $_POST['Message'];
  
     $SendDate= $_POST['SendDate'];
  
    
  
    $sql2="INSERT INTO clintmessages (Name,Email,Mobile,Subject,Message,SendDate )
      
    VALUES ('$Name','$Email','$Mobile','$Subject','$Message','$SendDate')";
                                                 
    $query=  mysqli_query($conn,$sql2); 
  
  
  


}



?>