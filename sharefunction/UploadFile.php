<?php

  $image_name=strip_tags($_FILES['img']['name']);      
  $image_dir = '../images/products/'.$image_name ;
  //image2
  $image_name2=strip_tags ($_FILES['img2']['name']);      
  $image_dir2 = '../images/products/'.$image_name2 ;

  //image3
  $image_name3= strip_tags($_FILES['img3']['name']);      
  $image_dir3 = '../images/products/'.$image_name3 ;


   //image4
   $image_name4=strip_tags( $_FILES['img4']['name']);      
   $image_dir4 = '../images/products/'.$image_name4 ;


   //image5
   $image_name5= strip_tags($_FILES['img5']['name']);      
   $image_dir5 = '../images/products/'.$image_name5 ;
   
    $profilecomp= strip_tags($_FILES['profilecompu']['name']);  

    $image_dir6 = '../images/user/'.$profilecomp ;
  
    $fileToUpload= strip_tags($_FILES['fileToUploadu']['name']);
    
    $pdffile_dir='../Files/'.$fileToUpload;

    move_uploaded_file($_FILES["img"]["tmp_name"],$image_dir);
    
    move_uploaded_file($_FILES["img2"]["tmp_name"],$image_dir2);
    move_uploaded_file($_FILES["img3"]["tmp_name"],$image_dir3);
    move_uploaded_file($_FILES["img4"]["tmp_name"],$image_dir4);
    move_uploaded_file($_FILES["img5"]["tmp_name"],$image_dir5);

    move_uploaded_file($_FILES["profilecompu"]["tmp_name"],$image_dir6);

    move_uploaded_file($_FILES["fileToUploadu"]["tmp_name"],$pdffile_dir);



?>
