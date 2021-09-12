
<?php
include("inc/header.php");
include("../config.php");


$query = mysqli_query($conn, "SELECT * FROM accounts WHERE UserType=2");

  $count = mysqli_num_rows($query);
    


//echo $data['total'];

?>

<div class="table-container">
  <div class="t-header">حسابات العملاء</div>
  <div class="table-responsive">
  <br><br>

  <div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
		<div class="info-stats4">
			<div class="info-icon">
				<i class="icon-user nav-icon"></i>
			</div>
			<div class="sale-num">
				<h4><?php echo $count ?></h4>
				<h4>عدد العملاء</h4>
			</div>
		</div>
	</div>

</div>


  

        <?php


  if(isset($_POST['Searchs'])&&$_POST['RegisterDate']!="")
  {
   $searchval=$_POST['RegisterDate'];

    //$searchval = strtotime($_POST['RegisterDate']); 
  //  $date=date('d',$searchval);
  //  $month=date('m',$searchval);
   // $year=date('Y',$searchval);

   // echo $searchval;


    $sqlsearch = "SELECT * FROM accounts WHERE RegisterDate='$searchval'";

    $result=mysqli_query($conn,$sqlsearch);


    echo'
<table id="copy-print-csv" class="table custom-table">
      <thead>
        <tr>
          <th>الاسم</th>
          <th>البريد الالكتروني</th>
          
          <th>نوع المستخدم</th>
         
          <th>المدينة</th>
            
              <th>صورة المستخدم</th>
                <th>العملية</th>
        </tr>
      </thead>
      <tbody>';
      
      while($row=mysqli_fetch_assoc($result))
          {
         $type=$row['UserType'];
         if($type=="1")
          {
          $usert="بائع";
           }
         else if($type=="2")
           {
           $usert="مشترى";
           }
           if($row['UserPhoto']!="")
           {
             $photo='<td> <div class="avatar xl"> <img src="../' .$row['UserPhoto'].'"  class="circle"></div></td>';
           }
           else
           {
           $photo='<td> <div class="avatar xl">
                   <img src="../images/user/user.png" class="circle"> </div> </td>';
           }
           ?>
         <tr>
     <td><?php echo $row['UserName'];?></td>
     <td><?php echo $row['Email'];?></td>
      <td><?php echo $usert ?></td>
    
      <td><?php echo $row['City']?></td>
      
      <?php
      echo $photo;
       ?>
      <td>
       <?php
       if($row['UserStatus']=="1")
       {
         echo '  <button type="button" id="notactive" onclick="NotActive(' .$row['UserID'].')" class="btn btn-danger"   data-toggle="modal" data-target="#NotActiveConfirmation">تعطيل</button> ';
       }
       else
       {
         echo '  <button type="button" id="active" onclick="Active(' .$row['UserID'].')"  class="btn btn-primary" data-toggle="modal" data-target="#ActiveConfirmation" >تفعيل  </button>';
       }
         ?>
     <button type="button" onclick="DeleteAccount(<?php echo $row['UserID'];?>)"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteConfirmation"> حذف</button>

     <a href="AccountDetails.php?id=<?php echo $row['UserID']; ?>" class="btn btn-info">
                            تفاصيل</a>
      </td>
     </tr>
    <?php
      }
      ?>
      </tbody>
     </table>
  </div>
</div>

<?php
  }

    




  
  




    


  else if((isset($_POST['CancelSearch'])))
  {
echo'
<table id="copy-print-csv" class="table custom-table">
      <thead>
        <tr>
          <th>الاسم</th>
          <th>البريد الالكتروني</th>
          
          <th>نوع المستخدم</th>
         
          <th>المدينة</th>
            
              <th>صورة المستخدم</th>
                <th>العملية</th>
        </tr>
      </thead>
      <tbody>';
      
      $sql = 'SELECT * FROM accounts WHERE UserType!="3" ';
     $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result))
          {
         $type=$row['UserType'];
         if($type=="1")
          {
          $usert="بائع";
           }
         else if($type=="2")
           {
           $usert="مشترى";
           }
           if($row['UserPhoto']!="")
           {
             $photo='<td> <div class="avatar xl"> <img src="../' .$row['UserPhoto'].'"  class="circle"></div></td>';
           }
           else
           {
           $photo='<td> <div class="avatar xl">
                   <img src="../images/user/user-thumb.jpg" class="circle"> </div> </td>';
           }
           ?>
         <tr>
     <td><?php echo $row['UserName'];?></td>
     <td><?php echo $row['Email'];?></td>
      <td><?php echo $usert ?></td>
    
      <td><?php echo $row['City']?></td>
      
      <?php
      echo $photo;
       ?>
      <td>
       <?php
       if($row['UserStatus']=="1")
       {
         echo '  <button type="button" id="notactive" onclick="NotActive(' .$row['UserID'].')" class="btn btn-danger"   data-toggle="modal" data-target="#NotActiveConfirmation">تعطيل</button> ';
       }
       else
       {
         echo '  <button type="button" id="active" onclick="Active(' .$row['UserID'].')"  class="btn btn-primary" data-toggle="modal" data-target="#ActiveConfirmation" >تفعيل  </button>';
       }
         ?>
     <button type="button" onclick="DeleteAccount(<?php echo $row['UserID'];?>)"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteConfirmation"> حذف</button>

     <a href="AccountDetails.php?id=<?php echo $row['UserID']; ?>" class="btn btn-info">
                            تفاصيل</a>
      </td>
     </tr>
    <?php
      }

   

      ?>
      </tbody>
     </table>
  </div>
</div>

<?php
  }

  else
  {


    echo'
<table id="copy-print-csv" class="table custom-table" data-page-length='10'>
      <thead>
        <tr>
          <th>الاسم</th>
          <th>البريد الالكتروني</th>

          <th>تاريخ تسجيل الحساب</th>
            
              <th>صورة المستخدم</th>
                <th>العملية</th>
        </tr>
      </thead>
      <tbody>';
      
      $sql = 'SELECT * FROM accounts WHERE UserType=2 ';
     $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result))
          {
       
           if($row['UserPhoto']!="")
           {
             $photo='<td> <div class="avatar xl"> <img src="../' .$row['UserPhoto'].'"  class="circle"></div></td>';
           }
           else
           {
           $photo='<td> <div class="avatar xl">
                   <img src="../images/user/user.png" class="circle"> </div> </td>';
           }
           ?>
         <tr>
     <td><?php echo $row['UserName'];?></td>
     <td><?php echo $row['Email'];?></td>

      <td><?php echo $row['RegisterDate']?></td>
      
      <?php
      echo $photo;
       ?>
      <td>
       <?php
       if($row['UserStatus']=="1")
       {
         echo '  <button type="button" id="notactive" onclick="NotActive(' .$row['UserID'].')" class="btn btn-danger"   data-toggle="modal" data-target="#NotActiveConfirmation">تعطيل</button> ';
       }
       else
       {
         echo '  <button type="button" id="active" onclick="Active(' .$row['UserID'].')"  class="btn btn-primary" data-toggle="modal" data-target="#ActiveConfirmation" >تفعيل  </button>';
       }
         ?>
     <button type="button" onclick="DeleteAccount(<?php echo $row['UserID'];?>)"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteConfirmation"> حذف</button>

     <a href="AccountDetails.php?id=<?php echo $row['UserID']; ?>" class="btn btn-info">
                            تفاصيل</a>
      </td>
     </tr>
    <?php
      }

   

      ?>
      </tbody>
     </table>
  </div>
</div>

<?php
  }

      ?>


   


          

    
  



  <?php  include("inc/confirmation.php");?>
  <?php  include("inc/footer.php");?>

