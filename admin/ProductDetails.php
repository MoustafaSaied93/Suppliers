<?php
include("inc/header.php");
include("../config.php");
?>

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

    <div class="form-group" id="vendor">
    <label><h6>البائع </h6></label>
    <input type="text" class = "form-control" name="VendorName" id="VendorNamesss" value="'.$row["UserName"].'" readonly>
                                                                                                                   
    </div>

    </div>
    <div class="col">

    <div class="form-group" id="Category">
    <label><h6>الصنف </h6></label>
    <input type="text" class = "form-control" name="CategoryName" id="CategoryNamesss" value="'.$row["cat_name"].'" readonly>
                                                                                                                  
    </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="company">
 <label><h6>اسم الشركة لتجارى</h6></label>                                                    
<input type="text" class = "form-control" name="CompanyNamesss" id="CompanyNamesss"  placeholder="ادخل اسم الشركة" value="'.$row["CompanyName"].'" readonly>
                                                                                                                      
 </div>
    </div>
  </div>
  </div>

  </div>






  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group" id="companyCode">
    <label><h6>كود الشركة</h6></label>                                                    
   <input type="text" class = "form-control" name="CompanyCodesss" id="CompanyCodesss"  placeholder="ادخل كود الشركة" value="'.$row["CompanyCode"].'" readonly>
                                                                                                                         
    </div>

    </div>
    <div class="col">

    <div class="form-group" id="service">
 <label><h6>خدمات الشركة</h6></label>                                                    
 <textarea class = "form-control" name="Servicesss" id="Servicesss" required="" placeholder="ادخل الخدمة" readonly>'.$row["Services"].'</textarea>
                                                                                                                      
 </div>
      
    </div>


    <div class="col">
    <div class="form-group" id="uploading">
    <label><h6>مرفقات المنتج</h6></label> 
    <br>  <br>                                                 
     <a href="../Files/'.$row['AttachFile'].'" download>'.$row['AttachFile'].'</a></td>
                                                                                                                       
    </div>
    </div>
  </div>
  </div>

  </div>

                                                       
 <div style="align-content:center" id="photo">
 <div class="form-group">
                                                       
 <label><h6>بروفايل الشركة</h6></label>
                                                       
  <img src="../' .$row['CompProfile'].'" style="margin:10px" height="200" width="200" id="imagePreviewccc" />
                                                       
  </div>
                                                       
  <div>
 <input type="file" name="fileUploaderControlccc" id="fileUploaderControlccc" style="display:none;">
 </div>
 </div>
    ';
       
    }

    else
    { 

      if($row['image1']!="")
      {
        $img1='<td> <div> <img src="../images/products/' .$row['image1'].'" width="50%"></div></td>';
      }

      if($row['image1']=="")
      {
        $img1="";
      }




      if($row['image2']!="")
      {
        $img2='<td> <div> <img src="../images/products/' .$row['image2'].'" width="50%"></div></td>';
      }

      if($row['image2']=="")
      {
        $img2="";
      }

     if($row['image3']!="")
      {
        $img3='<td> <div> <img src="../images/products/' .$row['image3'].'" width="50%"></div></td>';
      }

      if($row['image3']=="")
      {
        $img3="";
      }


     if($row['image4']!="")
      {
        $img4='<td> <div> <img src="../images/products/' .$row['image4'].'" width="50%"></div></td>';
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
<div class="form-group" id="vendor">
<label><h6>البائع </h6></label>
<input type="text" class = "form-control" name="VendorName" style ="width:50%" id="VendorNamesss" value="'.$row["UserName"].'" readonly>
   </div>   
   </div> 

   
   </div> 

  

   </div>  

<div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

<div class="form-group">
     <label><h6>الصنف </h6></label>
 <input type="text" class = "form-control"  name="CategoryName" id="CategoryNames" value="'.$row["cat_name"].'" readonly>
   
    </div>

    </div>
    <div class="col">

<div class="form-group">
 <label><h6>نوع الصنف  </h6></label>
 <input type="text" class = "form-control"  name="CatTypeName" id="CatTypeName" value="'.$row["CatTypeID"].'" readonly>
                                                                                                               
 </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>الصنف الفرعي  </h6></label>
   <input type="text" class = "form-control" name="SubCategoryName" id="SubCategoryName" value="'.$row["SubCatID"].'" readonly >
                                                                                                                  
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
    <input type="text" class = "form-control" name="SubCategoryType" id="SubCategoryType" value="'.$row["SubCategoryType"].'" readonly>
                                                                                                                   
     </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>اسم المنتج</h6></label>                                                    
    <input type="text" class = "form-control" name="Product_Name" id="Product_Names"   value="'.$row["Product_Name"].'" readonly>
                                                                                                                         
    </div>
      
    </div>


    <div class="col">
    <div class="form-group">
 <label><h6>وصف المنتج</h6></label>                                                    
 <textarea class = "form-control" name="Description" id="Descriptions" required=""  value="'.$row["Descrip"].'" readonly> '.$row["Descrip"].'</textarea>
                                                                                                                      
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
<input type="text" class = "form-control" name="Part_Number" id="Part_Numbers"   value="'.$row["PartNumber"].'" readonly>
                                                                                                                      
 </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label><h6>نوع القياس</h6></label> &nbsp; &nbsp;                                                  
    <input type="text" class = "form-control" name="Measurement_types" id="Measurement_types"  value="'.$row["Measurement_type"].'" readonly>
                                                                                                                         
   </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>الطول</h6></label>                                                    
   <input type="text" class = "form-control" name="Lengths" id="Lengths"   value="'.$row["Lengths"].'" readonly>                                                          
     </div>
    </div>
  </div>
  </div>


  

 <div class="container">
<div class="row">
<div class="col">

<div class="form-group">
<label><h6>القطر</h6></label>   
<input type="text" class = "form-control" name="Diameters" id="Diameters"   value="'.$row["Diameter"].'" readonly >
                                                                                                                        
</div>

 </div>
    <div class="col">

<div class="form-group">
 <label><h6>القطر الخارجى</h6></label>                                                    
<input type="text" class = "form-control" name="Out_Side_Diameters" id="Out_Side_Diameters"    value="'.$row["Out_Side_Diameter"].'" readonly>
                                                                                                                      
 </div>
      
    </div>


    <div class="col">
    <div class="form-group">
    <label><h6>العرض</h6></label>                                                    
  <input type="text" class = "form-control" name="Widths" id="Widths"   value="'.$row["Width"].'" readonly >
                                                                                                                        
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
 <input type="text" class = "form-control" name="wieghts" id="wieghts"   value="'.$row["wieght"].'" readonly>
                                                                                                                      
 </div>

 </div>
    <div class="col">

    <div class="form-group">
    <label><h6>الارتفاع</h6></label>                                                    
    <input type="text" class = "form-control" name="Hieghts" id="Hieghts"   value="'.$row["Hieght"].'" readonly>
                                                                                                                         
   </div>
      
    </div>

    <div class="col">
    <div class="form-group">
    <label><h6>الحجم</h6></label>                                                    
   <input type="text" class = "form-control" name="Sizes" id="Sizes"    value="'.$row["Size"].'" readonly>
                                                                                                                         
    </div>
    </div>
  </div>
  </div>




  
  <div class="container">
  <div class="row">
  <div class="col">
  
  <div class="form-group">
  <label><h6>قوة المحرك</h6></label>                                                    
  <input type="text" class = "form-control" name="Motorpowers" id="Motorpowers"   value="'.$row["Motorpower"].'" readonly>
                                                                                                                       
 </div>
  
   </div>
      <div class="col">
  
      <div class="form-group">
      <label><h6>الجهد الكهربى</h6></label>                                                    
     <input type="text" class = "form-control" name="Voltages" id="Voltages"   value="'.$row["Voltage"].'" readonly>
                                                                                                                           
      </div>
        
      </div>
  
      <div class="col">
      <div class="form-group">
      <label><h6>الكمية</h6></label>                                                    
     <input type="text" class = "form-control" name="Stocks" id="Stocks"  value="'.$row["Stocks"].'" readonly >
                                                                                                                      
 </div>
      </div>
    </div>
    </div>




    <div class="container">
    <div class="row">
    <div class="col">
    
    <div class="form-group">
    <label><h6>الدولة المصنعة</h6></label>                                                    
   <input type="text" class = "form-control" name="Industry_Country" id="Industry_Countrys"   value="'.$row["Industry_Country"].'" readonly>
                                                                                                                        
  </div>
    
     </div>
        <div class="col">
    
        <div class="form-group">
        <label><h6>اسم الشركة لتجارى</h6></label>                                                    
       <input type="text" class = "form-control" name="CompanyName" id="CompanyNamess"   value="'.$row["CompanyName"].'" readonly>
                                                                                                                             
        </div>
          
        </div>
    
        <div class="col">
        <div class="form-group">
        <label><h6>كود الشركة</h6></label>                                                    
       <input type="text" class = "form-control" name="CompanyCode" id="CompanyCodess"  value="'.$row["CompanyCode"].'" readonly>
                                                                                                                             
        </div>
        </div>
      </div>
      </div>
    
  

                                                       
<div class="form-group">
<label><h6>مرفقات المنتج</h6></label>  

<a href="../Files/'.$row['AttachFile'].'" download>'.$row['AttachFile'].'</a></td>                                                       
</div>



<div class="container">
<div class="row">
<label><h6>صور المنتج</h6></label>
<div class="col">
'. $img1.'






 </div>

 <div class="col">

 '. $img2.'

                                                                                                                  
 </div>

    <div class="col">

    '. $img3.'

                                                                                                                     
    </div>
    

    <div class="col">
    '. $img4.'
    </div>
  </div>
  </div>
';                                                         
 
    }
    
    echo '
    <div class="modal-footer" style="justify-content:normal;">
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