



<?php
include("inc/header.php");
include("../config.php");
?>

<div class="table-container">

  <div class="t-header">الصفحة الرئيسية</div>
  <div class="table-responsive">
  <br><br>
 
    <table id="copy-print-csv" class="table custom-table">
   
      <thead>
        <tr>
         
          <th>الصورة الاولى</th>
          <th>الصورة الثانية</th>
          <th>الصورة الثالثة</th>
          <th>وصف الموقع</th>

          <th>رقم هاتف الموقع</th>


        <th>العملية</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $sql = 'SELECT * FROM sliderimages';

     $result=mysqli_query($conn,$sql);

      while($row=mysqli_fetch_assoc($result))
          {
            if($row['SliderImage1']!="" && $row['SliderImage2']!="" && $row['SliderImage3']!="")
           {
             $photo='<td> <img src="../'.$row['SliderImage1'].'" height="30" width="50"></td>';
           

                 
             $photo1='<td> <img src="../'.$row['SliderImage2'].'" height="30" width="50"></td>';

             $photo2='<td> <img src="../'.$row['SliderImage3'].'" height="30" width="50"></td>';
           }


           else
           {
           $photo='<td> 
                   <img src="../images/NoImage.jpg"> </td>';

                   $photo1='<td> 
                   <img src="../images/NoImage.jpg"> </td>';

                   $photo2='<td> 
                   <img src="../images/NoImage.jpg"> </td>';
           }
         
           ?>
         <tr>
         <?php echo $photo;?>
         <? //php echo $photo;?>
       <?php  echo $photo1?>

       <?php  echo $photo2?>
     <td><?php echo $row['WebsiteInfo'];?></td>
     <td><?php echo $row['SiteMobile'];?></td>
      <td>
     
      <button type="button" data-toggle="modal" data-target="#Editsliderimages" onclick="Editsliderimages(<?php echo $row['Slider_ImageID'];?>)" class="btn btn-primary"> تعديل</button>
      </td>
     </tr>
    <?php
    
      }

      ?>
      </tbody>
     </table>
  </div>
</div>

  <?php  include("inc/AllPopup.php");?>
  <?php  include("inc/footer.php");?>