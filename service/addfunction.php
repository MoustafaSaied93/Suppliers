<?php



include('config.php');

$pages=strip_tags( $_POST['Page']);





if($pages=="trainer"){


    $trainer_name_ar= strip_tags( $_POST['trainer_name_ar']);
    $trainer_name_en= strip_tags( $_POST['trainer_name_en']);

   

    $mobile = strip_tags($_POST['mobile']);

    $age = strip_tags($_POST['age']);

    $hieght = strip_tags($_POST['hieght']);

    $wieght = strip_tags($_POST['wieght']);

    $descrip_ar = strip_tags($_POST['descrip_ar']);

    $descrip_en = strip_tags($_POST['descrip_en']);



    

    $up_file=$_FILES['img']['name'];
    
    $image_dir = '../admin/assets/images/coach/'.$up_file ;
    
   //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

    $sql2="INSERT INTO trainer (trainer_name_ar,trainer_name_en,mobile_number,age,hieght,wieght,descrip_ar,descrip_en,image)
      
    VALUES ('$trainer_name_ar','$trainer_name_en','$mobile','$age','$hieght','$wieght','$descrip_ar','$descrip_en','$up_file')";

                                                 
    $query=  mysqli_query($conn,$sql2); 

}



else if($pages=="class"){

  $class_name_ar= strip_tags( $_POST['class_name_ar']);
  $class_name_en= strip_tags( $_POST['class_name_en']);

  $trainer_id = strip_tags($_POST['trainer_id']);

  

  $up_file=$_FILES['img']['name'];
  
  $image_dir = '../admin/assets/images/'.$up_file ;
  
 //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

  move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

  $sql2="INSERT INTO classes (class_name_ar,class_name_en,trainer_id,image)
    
  VALUES ('$class_name_ar','$class_name_en','$trainer_id','$up_file')";

                                               
  $query=  mysqli_query($conn,$sql2); 

}



elseif($pages=="teams"){


  $Team_Name= strip_tags( $_POST['Team_Name']);
 
 
  $up_file=$_FILES['img']['name'];
  
  $image_dir = '../admin/assets/images/logo/'.$up_file ;
  
  
  move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);


  



  $sql2="INSERT INTO teams (Team_Name,Team_Logo)
    
  VALUES ('$Team_Name','$up_file')";
                                               
  $query=  mysqli_query($conn,$sql2); 



  $query2= mysqli_query($conn,"SELECT  team_number from arrangment_team order by team_number DESC LIMIT 1"); 

    $team_number= mysqli_fetch_assoc($query2);

    $TEAMNUMBER=$team_number['team_number'];

    if($TEAMNUMBER==null)

    {
      $TEAMNUMBERS=1;

    }

    else
     {

      $TEAMNUMBERS=$TEAMNUMBER +1;

    }

    $query3=mysqli_query($conn,"INSERT INTO arrangment_team (team_number,team_name,matches,points)
    
    VALUES ('$TEAMNUMBERS','$Team_Name','0','0') ");


}


else if($pages=="techniqal"){


  $coach_name= strip_tags( $_POST['coach_name']);
 
  $title = strip_tags($_POST['title']);

  $Descriptions = strip_tags($_POST['Descriptions']);


  $up_file=$_FILES['img']['name'];
  
  $image_dir = '../admin/assets/images/'.$up_file ;
  
 //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

  move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

  $sql2="INSERT INTO techniqal_team (coach_name,title,image,Descriptions)
    
  VALUES ('$coach_name','$title','$up_file','$Descriptions')";
                                               
  $query=  mysqli_query($conn,$sql2); 


}


else if($pages=="players"){


  $name =  $_POST['name'];

  $mobile_number =  $_POST['mobile_number'];

  $identity_number =  $_POST['identity_number'];


  $query2=mysqli_query($conn,"SELECT mobile_number FROM members_subscribtions WHERE mobile_number='$mobile_number' ");

  $query3=mysqli_query($conn,"SELECT identity_number FROM members_subscribtions WHERE identity_number='$identity_number' ");

 


    $CHECKVAL=mysqli_num_rows($query2);

    $CHECKVAL2=mysqli_num_rows($query3);

    if($CHECKVAL>=1)

    {
       $message=0;

        echo $message;
    }

   else if($CHECKVAL2>=1)

    {
       $message=1;

        echo $message;
    }


    else
    {

      $query4=mysqli_query($conn,"SELECT code FROM members_subscribtions  order by code DESC LIMIT 1 ");

      $CODE=mysqli_fetch_assoc($query4);


      $codes=$CODE['code'];

      if($codes==null)
  
      {
        $code=100;
  
      }
  
      else
       {
  
        $code=$codes +1;
  
      }

      $sql1="INSERT INTO members_subscribtions (name,identity_number,mobile_number,code)
    
      VALUES ('$name','$identity_number','$mobile_number',$code)";
                                                   
      $query1=  mysqli_query($conn,$sql1);

      $message=2;

      echo $message;
    }


    


}





else if($pages=="membersubscription"){


  $subscrname= strip_tags( $_POST['subscrname']);
 
  $startdate = strip_tags($_POST['startdate']);

  $enddate = strip_tags($_POST['enddate']);

  $price = strip_tags($_POST['price']);

  $tax = strip_tags($_POST['tax']);


  $taxnubmer= $price*$tax/100;

  $price_after_tax=$price+$taxnubmer;



  $sql2="INSERT INTO subscriptions (name,startdate,enddate,price,price_after_tax)
    
  VALUES ('$subscrname','$startdate','$enddate','$price','$price_after_tax')";
                                               
  $query=  mysqli_query($conn,$sql2); 


}





else if($pages=="invoice"){


  $subid= strip_tags( $_POST['subid']);
 
  $inventory_number = strip_tags($_POST['inventory_number']);

  $inventory_date = strip_tags($_POST['inventory_date']);

  $name = strip_tags($_POST['name']);

  $time = strip_tags($_POST['time']);

  $sql2="INSERT INTO inventory (subid,inventory_number,inventory_date,name,time)
    
  VALUES ('$subid','$inventory_number','$inventory_date','$name','$time')";
                                               
  $query=  mysqli_query($conn,$sql2); 

  $query2=  mysqli_query($conn,"UPDATE subscriptions SET active=1 WHERE subid ='$subid'"); 


}









?>