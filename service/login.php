<?php


session_start();

include('config.php');

$pages=strip_tags( $_POST['page']);




 if($pages=="adminlogin"){


  $password =strip_tags( $_POST['password']);
     $UserName =  strip_tags( $_POST['UserName']);


     $query=mysqli_query($conn,"SELECT * FROM users WHERE Password='$password' and  UserName='$UserName'  AND userid =1");

     if(mysqli_num_rows($query) < 1){

        $errorMSG = 404;
  
        echo json_encode($errorMSG);
  
      }

      else
      {

        $user = mysqli_fetch_assoc($query);


        $_SESSION ['id'] = $user ['userid'];
        $_SESSION['UserName'] = $user['UserName'];
        $_SESSION['passwords'] = $user['Password'];
     
        $_SESSION['UserType'] = $user['UserType'];


      }
    

}





?>