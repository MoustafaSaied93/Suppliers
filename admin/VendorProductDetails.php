<?php
include("inc/header.php");
include("../config.php");
?>
<style>
.img{

hieght:30%;
}

</style>
<div class="panel panel-red">
    <div class="panel-heading">
    <h4 class="panel-title" id="ModalTitle" style="text-align:center;" > تفاصيل المنتج</h4>
    </div>
  <div class="modal-body">
           
  <form id="form">
 <fieldset id="SubmitForm">
 <?php

$id = $_GET['id'];

//$id = $_GET['id'];

$result=mysqli_query($conn,"SELECT p.*, a.*, c.*
     FROM product p INNER JOIN
     accounts a
          ON p.UserID = a.UserID INNER JOIN
          categories c
          ON p.cat_id = c.cat_id   
         
           WHERE p.product_id='$id '");

while($row = mysqli_fetch_array($result))
{  
    if($row["cat_id"]==9)
    {

echo'

<div class="container">
  <div class="row">
    <div class="col">

<div class="form-group">
     <label><h6>الصنف </h6></label>
 <input type="text" class = "form-control"  value="'.$row["cat_name"].'" readonly="readonly">
   
    </div>

    </div>
    <div class="col">

    <div class="form-group" id="company">
    <label><h6>اسم الشركة لتجارى</h6></label>                                                    
   <input type="text" class = "form-control"  value="'.$row["CompanyName"].'" readonly="readonly" >
                                                                                                                         
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="companyCode">
 <label><h6>كود الشركة</h6></label>                                                    
<input type="text" class = "form-control"  value="'.$row["CompanyCode"].'" readonly="readonly"  >
                                                                                                                      
 </div>
    </div>
  </div>
  </div>

  </div>




  <div class="container">
  <div class="row">
    <div class="col">

    <div class="form-group" id="service">
    <label><h6>خدمات الشركة</h6></label>                                                    
    <textarea class = "form-control" readonly>'.$row["Services"].'</textarea>
                                                                                                                         
    </div>


    </div>


    <div class="col">

    <div class="form-group" id="uploading">
    <label><h6>مرفقات المنتج</h6></label>  
    <br><br>                                                  
     <a href="../Files/'.$row['AttachFile'].'" download>'.$row['AttachFile'].'</a></td>
                                                                                                                       
    </div>
      
    </div>


    <div class="col">
    <div style="align-content:center" id="photo">
    <div class="form-group">
                                                          
    <label><h6>بروفايل الشركة</h6></label>
    <br>
                                                          
     <img src="../images/user/'.$row["CompProfile"].' " style="margin:10px" height="200" width="200" id="imagePreviewccc" />
                                                          
     </div>
                                                          
     <div>
    <input type="file" name="fileUploaderControlccc" id="fileUploaderControlccc" style="display:none;">
    </div>
    </div>
    </div>
  </div>
  </div>

  </div>
    ';
       
    }

    else
    { 

      if($row['image1']!="")
      {
        $img1='<td> <div> <img src="../images/products/' .$row['image1'].'" width="20%"></div></td>';
      }

      if($row['image1']=="")
      {
        $img1="";
      }




      if($row['image2']!="")
      {
        $img2='<td> <div> <img src="../images/products/' .$row['image2'].'" width="20%"></div></td>';
      }

      if($row['image2']=="")
      {
        $img2="";
      }

     if($row['image3']!="")
      {
        $img3='<td> <div> <img src="../images/products/' .$row['image3'].'" width="20%"></div></td>';
      }

      if($row['image3']=="")
      {
        $img3="";
      }


     if($row['image4']!="")
      {
        $img4='<td> <div> <img src="../images/products/' .$row['image4'].'" width="20%"></div></td>';
      }

      if($row['image4']=="")
      {
        $img4="";
      }






      echo '                                             
<div id="mainforms">
   
<div class="container">
  <div class="row">
    <div class="col">

<div class="form-group">
     <label><h6>الصنف </h6></label>
 <input type="text" class = "form-control"  value="'.$row["cat_name"].'" readonly="readonly">
   
    </div>

    </div>
    <div class="col">

<div class="form-group">
 <label><h6>نوع الصنف  </h6></label>
 <input type="text" class = "form-control"   value="'.$row["CatTypeID"].'" readonly="readonly">
                                                                                                               
 </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>الصنف الفرعي  </h6></label>
   <input type="text" class = "form-control"  value="'.$row["SubCatID"].'" readonly="readonly" >
                                                                                                                  
   </div>
    </div>
  </div>
  </div>

  </div>



  <div class="container">
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label><h6> نوع الصنف الفرعي </h6></label>
    <input type="text" class = "form-control"  value="'.$row["SubCategoryType"].'" readonly="readonly">
                                                                                                                   
     </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>اسم المنتج</h6></label>                                                    
    <input type="text" class = "form-control"  value="'.$row["Product_Name"].'" readonly="readonly">
                                                                                                                         
    </div>
      
    </div>


    <div class="col">
    <div class="form-group">
 <label><h6>وصف المنتج</h6></label>                                                    
 <textarea class = "form-control"  value="'.$row["Descrip"].'" readonly="readonly"> '.$row["Descrip"].'</textarea>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>

  </div>



  <div class="container">
  <div class="row">
    <div class="col">

    <div class="form-group">
<label><h6>رقم القطعة</h6></label>                                                    
<input type="text" class = "form-control"    value="'.$row["PartNumber"].'" readonly="readonly" >
                                                                                                                      
 </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>نوع القياس</h6></label> &nbsp; &nbsp;                                                  
    <input type="text" class = "form-control"   value="'.$row["Measurement_type"].'" readonly="readonly">
                                                                                                                         
   </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>الطول</h6></label>                                                    
   <input type="text" class = "form-control"  value="'.$row["Lengths"].'" readonly="readonly">                                                          
     </div>
    </div>
  </div>
  </div>


  

 <div class="container">
<div class="row">
<div class="col">

<div class="form-group">
<label><h6>القطر</h6></label>   
<input type="text" class = "form-control"  value="'.$row["Diameter"].'" readonly="readonly" >
                                                                                                                        
</div>

 </div>
    <div class="col">

<div class="form-group">
 <label><h6>القطر الخارجى</h6></label>                                                    
<input type="text" class = "form-control"    value="'.$row["Out_Side_Diameter"].'" readonly="readonly">
                                                                                                                      
 </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>العرض</h6></label>                                                    
  <input type="text" class = "form-control"  value="'.$row["Width"].'" readonly="readonly" >
                                                                                                                        
  </div>
    </div>
  </div>
  </div>

  </div>


<div class="container">
<div class="row">
<div class="col">

<div class="form-group">
 <label><h6>الوزن</h6></label>                                                    
 <input type="text" class = "form-control"  value="'.$row["wieght"].'" readonly="readonly">
                                                                                                                      
 </div>

 </div>
    <div class="col">

    <div class="form-group">
    <label><h6>الارتفاع</h6></label>                                                    
    <input type="text" class = "form-control"  value="'.$row["Hieght"].'" readonly="readonly">
                                                                                                                         
   </div>
      
    </div>

    <div class="col">
    <div class="form-group">
    <label><h6>الحجم</h6></label>                                                    
   <input type="text" class = "form-control"   value="'.$row["Size"].'" readonly="readonly">
                                                                                                                         
    </div>
    </div>
  </div>
  </div>




  
  <div class="container">
  <div class="row">
  <div class="col">
  
  <div class="form-group">
  <label><h6>قوة المحرك</h6></label>                                                    
  <input type="text" class = "form-control"  value="'.$row["Motorpower"].'" readonly="readonly" >
                                                                                                                       
 </div>
  
   </div>
      <div class="col">
  
      <div class="form-group">
      <label><h6>الجهد الكهربى</h6></label>                                                    
     <input type="text" class = "form-control"  value="'.$row["Voltage"].'" readonly="readonly">
                                                                                                                           
      </div>
        
      </div>
  
      <div class="col">
      <div class="form-group">
      <label><h6>الكمية</h6></label>                                                    
     <input type="text" class = "form-control"  value="'.$row["Stocks"].'" readonly="readonly"  >
                                                                                                                      
 </div>
      </div>
    </div>
    </div>




   







      <div class="container">
      <div class="row">
      <div class="col">
      
      <div class="form-group">
      <label><h6>الدولة المصنعة</h6></label>                                                    
     <input type="text" class = "form-control" value="'.$row["Industry_Country"].'" readonly="readonly">
                                                                                                                          
    </div>
      
       </div>
          <div class="col">
      
          <div class="form-group">
          <label><h6>اسم الشركة لتجارى</h6></label>                                                    
         <input type="text" class = "form-control"  value="'.$row["CompanyName"].'" readonly="readonly">
                                                                                                                               
          </div>
            
          </div>
      
          <div class="col">
          <div class="form-group">
          <label><h6>كود الشركة</h6></label>                                                    
         <input type="text" class = "form-control"  value="'.$row["CompanyCode"].'" readonly="readonly">
                                                                                                                               
          </div>
          </div>
        </div>
        </div>


        <div class="container">
        <div class="row">
        <div class="col">
    
        <div class="form-group">
        <label><h6>فترة ضمان المنتج</h6></label>                                                    
       <input type="text" class = "form-control"  value="'.$row["Product_Warranty"].'" readonly="readonly">
                                                                                                                             
        </div>
        </div> 
       
    
        <div class="col">
        <div class="form-group">
        <label><h6>مرفق المنتج</h6></label>                                                    
         <br>
        <a href="../Files/'.$row['AttachFile'].'" download>'.$row['AttachFile'].'</a></td>                                                       
        </div>                                                                                                               
        </div>
        </div>
    



<div class="container">
<div class="row">
<label><h6>صور المنتج</h6></label>
<div class="col">

'.$img1.';
'.$img2.';



 </div>
    <div class="col">

    '.$img3.';

                                                                                                                     
    </div>
    

    <div class="col">
    '.$img4.';
    </div>
  </div>
  </div>
';                                                         
 
    }
    
    echo '
                                                       
    <div class="modal-footer" style="padding-left:590px">
    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="history.back()"> رجوع الى الصفحة الرئيسية</button>
            
    </div>                                                
 </fieldset>
 </form>

  </div>

</div>

';
}

?>
  

<?php  include("inc/confirmation.php");?>
  <?php  include("inc/AllPopup.php");?>
  <?php  include("inc/footer.php");?>