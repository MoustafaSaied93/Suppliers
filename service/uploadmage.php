
<?php

$pages=strip_tags( $_POST['Page']);

if($pages=="playersupload"){


 

    for($i=0; $i<count($_FILES['img']['name']); $i++)
    {
       
      
        $filename = $_FILES['img']['name'][$i];
     
    
        $image_dir = '../admin/assets/images/players/'.$filename ;

        move_uploaded_file($_FILES['img'] ["tmp_name"][$i],$image_dir);
        
        
    }

}
    





    ?>