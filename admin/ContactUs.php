



<?php
include("inc/header.php");
include("../config.php");
?>

<div class="table-container">

  <div class="t-header">صفحة اتصل بنا</div>
  <div class="table-responsive">
  <br><br>
 
    <table id="copy-print-csv" class="table custom-table">
   
      <thead>
        <tr>
         
          <th>وصف الصفحة</th>
          <th>موقع الشركة</th>
          <th>هاتف الشركة</th>
          <th>ايميل الشركة</th>
          <th>مواعيد العمل</th>
          <th>ساعات العمل</th>
        <th>العملية</th>
        </tr>
      </thead>
      <tbody>
        <?php
      $sql = 'SELECT * FROM contact_us where ContactUsID=1';

     $result=mysqli_query($conn,$sql);

      while($row=mysqli_fetch_assoc($result))
          {
           
         
           ?>
         <tr>
        
     <td><?php echo $row['ContactInfo'];?></td>
     <td><?php echo $row['OfficeLocation'];?></td>
     <td><?php echo $row['OfficeMobile'];?></td>
     <td><?php echo $row['OfficeEmail'];?></td>
     <td><?php echo $row['OfficeAppointment'];?></td>

     <td><?php echo $row['WorkHours'];?></td>
      <td>
     
      <button type="button" data-toggle="modal" data-target="#EditContactUS" onclick="EditContactUS(<?php echo $row['ContactUsID'];?>)" class="btn btn-primary"> تعديل</button>
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
