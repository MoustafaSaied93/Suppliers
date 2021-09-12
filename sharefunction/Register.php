<?php

session_start();
include('../config.php');

$pages=strip_tags( $_POST['page']);

if($pages=="registercustomer"){


    $UserName = strip_tags( $_POST['UserName']);
     $password =strip_tags( $_POST['password']);
     $Email =  strip_tags( $_POST['Email']);
  
     $Mobile =strip_tags( $_POST['Mobile']);
  
     $Address = strip_tags($_POST['Address']);
  
     $RegisterDate= strip_tags ($_POST['RegisterDate']);
  
     $UserType = strip_tags ($_POST['UserType']);
  
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


    $Name = strip_tags( $_POST['Name']);
    $Email = strip_tags ($_POST['Email']);
  
     $Mobile =strip_tags( $_POST['Mobile']);
  
     $Subject =strip_tags( $_POST['Subject']);

     $Message=strip_tags( $_POST['Message']);
  
     $SendDate= strip_tags ($_POST['SendDate']);
  
    
  
    $sql2="INSERT INTO clintmessages (Name,Email,Mobile,Subject,Message,SendDate )
      
    VALUES ('$Name','$Email','$Mobile','$Subject','$Message','$SendDate')";
                                                 
    $query=  mysqli_query($conn,$sql2); 
  
  
  


}


else if($pages=="SendClientExplation"){


    $ClientName= strip_tags( $_POST['ClientName']);
   
  
    $ClientSubject = strip_tags($_POST['ClientSubject']);

    $ClientMessage= strip_tags($_POST['ClientMessage']);

     $P_Name=strip_tags( $_POST['P_Name']);

     $P_number=strip_tags( $_POST['P_number']);

     $UserID= strip_tags($_POST['UserID']);

     $ClientSendDate=strip_tags( $_POST['ClientSendDate']);
  
    
  
    $sql2="INSERT INTO clientexp (ProductName,PartNumber,ClientName,Subject,Message,UserID,SendDate )
      
    VALUES ('$P_Name','$P_number','$ClientName','$ClientSubject','$ClientMessage','$UserID','$ClientSendDate')";
                                                 
    $query=  mysqli_query($conn,$sql2); 
  
  
  


}


else if($pages=="ReviewProduct"){


    $ClientName= strip_tags( $_POST['ClientName']);
   

    $ClientMessage= strip_tags($_POST['ClientMessage']);

     $P_id=strip_tags( $_POST['P_id']);


     $ClientSendDate= strip_tags( $_POST['ClientSendDate']);
     
  
    $sql2="INSERT INTO productreviews (product_id,C_Name,Description,SendDate )
      
    VALUES ('$P_id','$ClientName','$ClientMessage','$ClientSendDate')";
                                                 
    $query=  mysqli_query($conn,$sql2); 
  
  
  


}




?>