
<?php 



session_start();
include('../config.php');

$pages=$_POST['page'];


if($pages=="Login")

{


  $Email =  $_POST['Email'];
$pass = $_POST['password'];


    $sql = mysqli_query ($conn, "SELECT * FROM accounts
    where  passwords = '$pass' AND Email='$Email'");
    
$sql2 = mysqli_query ($conn, "SELECT * FROM accounts
    where  passwords = '$pass' AND Email='$Email' AND UserStatus='1'");






    if(mysqli_num_rows($sql) != 1){

      $errorMSG = 202;

      echo json_encode($errorMSG);

    }


   else  if(mysqli_num_rows($sql2) != 1){

        $errorMSG = 201;
  
        echo json_encode($errorMSG);
  
      }

    else {

        $user = mysqli_fetch_assoc($sql);
        $_SESSION ['id'] = $user ['UserID'];
        $_SESSION['UserName'] = $user['UserName'];
        $_SESSION['passwords'] = $user['passwords'];
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['UserType'] = $user['UserType'];


        if($_SESSION['UserType']==1 ||$_SESSION['UserType']==2)
        {
        
         

            $errorMSG = 203;

            echo json_encode($errorMSG);


        }

        else if($_SESSION['UserType']==3)
        {

            $errorMSG = 204;

            echo json_encode($errorMSG);

        
        }





}

}







?>