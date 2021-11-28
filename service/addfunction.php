<?php



include('config.php');

$pages=strip_tags( $_POST['Page']);





if($pages=="members"){


    $member_name= strip_tags( $_POST['member_name']);
   
    $title = strip_tags($_POST['title']);


    $up_file=$_FILES['img']['name'];
    
    $image_dir = '../admin/assets/images/'.$up_file ;
    
   //$imagepath ="C:/xampp/htdocs/RestaurantSystem/images/".$image_name;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);

    $sql2="INSERT INTO teammember (member_name,title,image)
      
    VALUES ('$member_name','$title','$up_file')";
                                                 
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


  $PlayerName =  $_POST['PlayerName'];

  $position =  $_POST['position'];

  $number =  $_POST['number'];

  $image =  $_FILES['img']['name'];
  

    $sql1="INSERT INTO players (PlayerName,position,number,image)
    
   VALUES ('$PlayerName','$position','$number','$image')";
                                                
   $query1=  mysqli_query($conn,$sql1); 


   $image_dir1 = '../admin/assets/images/players/'.$_FILES['img']['name'];

   move_uploaded_file($_FILES['img']["tmp_name"],$image_dir1);

}


else if($pages=="vedios"){


  $Vedio_Title = explode(",", $_POST['Vedio_Title']);

  $Vedio_Link = explode(",", $_POST['Vedio_Link']);

 
  for($count = 0; $count<count($Vedio_Title); $count++)
  {

    $Vedio_Titlearr=$Vedio_Title[$count];

    $Vedio_Linkarr=$Vedio_Link[$count];

    

    $sql1="INSERT INTO vedios (Vedio_Title,Vedio_Link)
    
   VALUES ('$Vedio_Titlearr','$Vedio_Linkarr')";
                                                
   $query1=  mysqli_query($conn,$sql1); 
  

  }

}


else if($pages=="champs"){


  $shampion_Name = explode(",", $_POST['shampion_Name']);


  $files= $_FILES['img'];
  
  

  for($count = 0; $count<count($shampion_Name); $count++)
  {

    $shamparr=$shampion_Name[$count];

    $arrfile=$files['name'][$count];

   

    $sql1="INSERT INTO club_shampion (shampion_Name,image)
    
   VALUES ('$shamparr','$arrfile')";
                                                
   $query1=  mysqli_query($conn,$sql1);


   if($files['name'][$count]!="")
  
    $image_dir1 = '../admin/assets/images/'.$files['name'][$count] ;

    move_uploaded_file($files["tmp_name"][$count],$image_dir1);
   
  
  

  }

}



else if($pages=="matches"){


  $First_Team= strip_tags( $_POST['First_Team']);
 
  $Second_Team = strip_tags($_POST['Second_Team']);

  $MatchDate = strip_tags($_POST['MatchDate']);

  $dayname = strip_tags($_POST['dayname']);

  $timepicker2 = strip_tags($_POST['timepicker2']);


  $sql2="INSERT INTO all_matches (First_Team,Second_Team,MatchDate,Day,Hour)
    
  VALUES ('$First_Team','$Second_Team','$MatchDate','$dayname','$timepicker2')";
                                               
  $query=  mysqli_query($conn,$sql2); 


}


else if($pages=="news"){


  $Tille= strip_tags( $_POST['Tille']);
 
  $PublishDate = strip_tags($_POST['PublishDate']);

  $New = strip_tags($_POST['New']);

  $myFiles=$_FILES['img'];

  //image 1
  $image_name=$myFiles['name'][0];      
  $image_name1=$myFiles['name'][1]; 
  $image_name2=$myFiles['name'][2];
  $image_name3=$myFiles['name'][3];
  $image_name4=$myFiles['name'][4];
  $image_name5=$myFiles['name'][5];
  $image_name6=$myFiles['name'][6];
  $image_name7=$myFiles['name'][7];

   for($i=0;$i<count($myFiles);$i+=1)
   {
     if($myFiles['name'][$i]!="")
  
    $image_dir1 = '../admin/assets/images/news/'.$myFiles['name'][$i] ;

    move_uploaded_file($myFiles["tmp_name"][$i],$image_dir1);

   }

  $sql2="INSERT INTO news_club (Tille,New,PublishDate,image1,image2,image3,image4,image5,image6,image7,image8)
    
  VALUES ('$Tille','$New','$PublishDate','$image_name','$image_name1','$image_name2','$image_name3','$image_name4','$image_name5','$image_name6','$image_name7')";
                                               
  $query=  mysqli_query($conn,$sql2); 

}



  














?>