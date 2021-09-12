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
             $photo='<td> <div> <img src="../' .$row['UserPhoto'].'" width="40%"></div></td>';
           }
           else
           {
           $photo='<td> <div>
                   <img src="../images/user/user.png" width="20%"> </div> </td>';
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

  </div>
  </div>

  </div>

                                                       
 <div style="align-content:center" id="photo">
 <div class="form-group">
                                                       
 <label><h6>صورة العميل</h6></label>

 '.$photo.'
                                                       
  </div>
                                                       
 </div>
    ';
       
    }

    else
    { 

      if($row['UserPhoto']!="")
      {
        $photo='<td> <div> <img src="../' .$row['UserPhoto'].'" width="20%"></div></td>';
      }
      else
      {
      $photo='<td> <div>
              <img src="../images/user/user.png" width="20%"> </div> </td>';
      }

      echo '    
      
      
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

    <div class="form-group">
    <label><h6>الدولة</h6></label>
    <input type="text" class = "form-control" value="'.$row["Country"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>المدينة </h6></label>
    <input type="text" class = "form-control" value="'.$row["City"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>العنوان</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["Address"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>

  </div>





  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6>كود الشركة</h6></label>
    <input type="text" class = "form-control" value="'.$row["CompanyCode"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>اسم الشركة </h6></label>
    <input type="text" class = "form-control" value="'.$row["CompanyName"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>تاريخ تسجيل الحساب</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["RegisterDate"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>





  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6>البنك</h6></label>
    <input type="text" class = "form-control" value="'.$row["BankName"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>فرع البنك </h6></label>
    <input type="text" class = "form-control" value="'.$row["BranchName"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>رقم الحساب</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["AccountNumber"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>



  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6>رقم الحساب المصرفى</h6></label>
    <input type="text" class = "form-control" value="'.$row["IBANNumber"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>السويفت كود </h6></label>
    <input type="text" class = "form-control" value="'.$row["SwiftCode"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>العملة</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["Currency"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>


  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6>رقم السجل الضريبى</h6></label>
    <input type="text" class = "form-control" value="'.$row["TaxRegisternumber"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>السجل التجارى</h6></label>
    <input type="text" class = "form-control" value="'.$row["CommercialRegister"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>تاريخ انتهاء السجل التجارى</h6></label>                                                    
<input type="text" class = "form-control"   value="'.$row["CommercialExpDate"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>





  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
<label><h6>مرفق رقم الهوية</h6></label>  
<br>
<a href="../Files/'.$row['UploadNationalID'].'" download>'.$row['UploadNationalID'].'</a></td>                                                       
</div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>مرفق الرخصة التجارية</h6></label> 
    <br>
    
    <a href="../Files/'.$row['TradeLicense'].'" download>'.$row['TradeLicense'].'</a></td>                                                       
    </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>مرفق السجل التجاري</h6></label>  
    <br>
    <a href="../'.$row['Commercial_File'].'" download>'.$row['Commercial_File'].'</a></td>                                                       
    </div>
      
    </div>
    </div>
  </div>

  <div style="align-content:center" id="photo">
  <div class="form-group">
                                                        
  <label><h6>لوجو الشركة</h6></label>
 
  '.$photo.'
                                                        
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