<?php
include("inc/header.php");
include("../config.php");
?>

<div class="panel panel-red">
    <div class="panel-heading">
    <h4 class="panel-title" id="ModalTitle" style="text-align:center;" > تفاصيل العميل</h4>
    </div>
  <div class="modal-body">
           
  <form id="form">
 <fieldset id="SubmitForm">
 <?php

$id = $_GET['id'];

$result=mysqli_query($conn,"SELECT *
     FROM accounts    
         
           WHERE UserID='$id '");

while($row = mysqli_fetch_array($result))
{  
    if($row["UserType"]==2)
    {


      if($row['UserPhoto']!="")
           {
             $photo='<td> <div> <img src="../' .$row['UserPhoto'].'" width="50%"></div></td>';
           }
           else
           {
           $photo='<td> <div>
                   <img src="../images/user/user.png" width="50%"> </div> </td>';
           }





echo'



<div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6>اسم العميل</h6></label>
    <input type="text" class = "form-control" value="'.$row["UserName"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>البريد الالكترونى </h6></label>
    <input type="text" class = "form-control" value="'.$row["Email"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>رقم الهاتف</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["Mobile"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>

  </div>






  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group" id="companyCode">
    <label><h6>المدينة</h6></label>                                                    
   <input type="text" class = "form-control"    value="'.$row["City"].'" readonly>
                                                                                                                         
    </div>

    </div>
    <div class="col">

    <div class="form-group" id="service">
 <label><h6>العنوان</h6></label>                                                    
 <textarea class = "form-control"  readonly>'.$row["Address"].'</textarea>
                                                                                                                      
 </div>
      
    </div>


    <div class="col">

    <div style="align-content:center" id="photo">
    <div class="form-group">
                                                          
    <label><h6>صورة العميل</h6></label>
   
    '.$photo.'
                                                          
     </div>
                                                          
    </div>
      
    </div>

  </div>
  </div>

  </div>

  <div class="modal-footer" style="padding-left:590px">
   <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="history.back()"> رجوع الى الصفحة الرئيسية</button>
           
   </div>  



  </div>


  
  </div>
                                           
                                                       
 </fieldset>
 </form>

  </div>

</div>

';
}
}
?>
  

<?php  include("inc/confirmation.php");?>
  <?php  include("inc/AllPopup.php");?>
  <?php  include("inc/footer.php");?>