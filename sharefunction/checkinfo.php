<?php
include_once("../config.php");
$entity=$_POST['entity'];

if($entity=="mail"){


 $Email =   $_POST['Email'];


 $sql=mysqli_query($conn,"SELECT * FROM accounts WHERE Email= '$Email'");
 


if(mysqli_num_rows($sql)>0)
{

  $errorMSG = 200;

  echo json_encode($errorMSG);
}

else 
{

  $errorMSG = 201;

  echo json_encode($errorMSG);
}

}


else if($entity=="mobile"){


    $Mobile =   $_POST['Mobile'];
   
   
    $sql=mysqli_query($conn,"SELECT * FROM accounts WHERE Mobile= '$Mobile'");
    
   
   
   if(mysqli_num_rows($sql)>0)
   {
   
     $errorMSG = 202;
   
     echo json_encode($errorMSG);
   }
   
   else 
   {
   
     $errorMSG = 203;
   
     echo json_encode($errorMSG);
   }
   
   }


?>