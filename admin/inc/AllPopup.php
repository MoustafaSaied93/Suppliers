<?php  


if (isset($_SESSION['id']))
	{

  $UserID = $_SESSION['id'];

  }

?>

     <style>

.form-controls {
    display: block;
    width: 150%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

       
     
     </style>
           
            

  <!-- add Product modal -->
           
    <div class="modal fade" id="AddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">    
    <div class="modal-dialog" role="document">
    <div class="modal-content">                      
    <div class="modal-body">
    <div class="panel panel-red">
    <div class="panel-heading">
    <h4 class="panel-title" id="ModalTitle" style="text-align:center;" > اضافة منتج جديد</h4>
    </div>
  <div class="modal-body">
           
  <form id="form" enctype="multipart/form-data">
                                                         
  <fieldset id="SubmitForm">

  <input type="hidden" id="product_id">

  <input type="hidden" id="UserID" value="<?php $UserID 
  
  ?>">
                                                                
    <div class="form-group">
    <label><h6>الصنف </h6></label>
           
    <select class="form-control" id="cat_id">
    <?php 
    include("../config.php");
    $cat=mysqli_query($conn,"SELECT * FROM categories");

          while($row= mysqli_fetch_assoc($cat))
           {


          ?>  
    <option value="<?php echo $row['cat_id']?>"> <?php echo $row['cat_name']?> </option>
         <?php 
        }
       ?> 

     </select>                                                               
    </div>

<div id="Catfield">
   <div class="form-group">
    <label><h6>نوع الصنف </h6></label>
           
    <select class="form-control" name="CatTypeID" id="CatTypeID">
    <?php 
    include("../config.php");
    $car=mysqli_query($conn,"SELECT * FROM categorytype where cat_id='8' ");

          while($row= mysqli_fetch_assoc($car))
           {
          ?>  
    <option value="<?php echo $row['CatTypeName']?>"> <?php echo $row['CatTypeName']?> </option>
         <?php 
        }
       ?> 

     </select>                                                               
    </div>

</div>



<div id="EditCatfield" style="display: none;">
   <div class="form-group">
    <label><h6>نوع الصنف </h6></label>
           
    <select class="form-control" name="CatTypesID" id="CatTypesID">
   
    
        

     </select>                                                               
    </div>

</div>


<div id="SubCatfield">
   <div class="form-group">
    <label><h6>الصنف الفرعى </h6></label>
           
    <select class="form-control" name="SubCatID" id="SubCatID">
    <?php 
    include("../config.php");
    $car=mysqli_query($conn,"SELECT * FROM subcategory where cat_id='8' and CatTypeID='1' ");

          while($row= mysqli_fetch_assoc($car))
           {
          ?>  
    <option value="<?php echo $row['SubCategoryName']?>"> <?php echo $row['SubCategoryName']?> </option>
         <?php 
        }
       ?> 

     </select>                                                               
    </div>

</div>



<div id="EditSubCatfield" style="display:none;">
   <div class="form-group">
    <label><h6>الصنف الفرعى </h6></label>
           
    <select class="form-control" name="SubCatsID" id="SubCatsID">
   

     </select>                                                               
    </div>

</div>


<div id="SubCattypefield" style="display: none;">
   <div class="form-group">
    <label><h6>نوع الصنف الفرعي </h6></label>
           
    <select class="form-control" name="SubCatTypeID" id="SubCatTypeID">
    <option value="بلاستيك">  <p> بلاستيك</p>   </option>
    <option value="حديد"><p>حديد</p></option>
    <option value="فايبر"><p>فايبر</p></option>
     </select>                                                               
    </div>

</div>

<!-- main popup!-->

<div id="mainpopup"> 

    <div class="form-group">
    <label><h6>اسم المنتج</h6></label>                                                    
  <input type="text" class = "form-control" name="Product_Name" id="Product_Name"  placeholder="ادخل اسم المنتج">                                                     
   </div>

   

   <div class="form-group">
    <label><h6>وصف المنتج</h6></label>                                                    
  <textarea class = "form-control" name="Description" id="Description" required="" placeholder="ادخل الوصف"></textarea>
                                                               
   </div>


   <div class="form-group">
    <label><h6>سعر المنتج</h6></label>                                                    
  <input type="number" class = "form-control" name="Price" id="Price"  placeholder="ادخل السعر">                                                     
   </div>

   <div class="form-group">
    <label><h6>رقم القطعة او الموديل</h6></label>                                                    
  <input type="text" class = "form-control" name="Part_Number" id="Part_Number"  placeholder="ادخل رقم القطعة">
                                                               
   </div>
   <div class="form-group">
    <label><h6>نوع القياس</h6></label> &nbsp; &nbsp;  
    

    <label class="radio-inline"><input type="radio" name="Measurement_type" value="MM">MM</label>
    
    <label class="radio-inline"><input type="radio" name="Measurement_type" value="ANSH">IN</label>

    <label class="radio-inline"><input type="radio" name="Measurement_type" value="NA">NA</label>
                                                            
   </div>


   <div class="form-group">
    <label><h6>ضمان المنتج</h6></label>                                                    
  <input type="number" class = "form-control" name="Product_Warranty" id="Product_Warranty"  placeholder="ضمان المنتج">                                                          
   </div>

   <div class="form-group">
    <label><h6>الطول</h6></label>                                                    
  <input type="text" class = "form-control" name="Length" id="Length"  placeholder="الطول">                                                          
   </div>

   <div class="form-group">
    <label><h6>القطر</h6></label>                                                    
  <input type="text" class = "form-control" name="Diameter" id="Diameter"  placeholder="القطر">
                                                               
   </div>

   <div class="form-group">
    <label><h6>القطر الخارجى</h6></label>                                                    
  <input type="text" class = "form-control" name="Out_Side_Diameter" id="Out_Side_Diameter"  placeholder="ادخل القطر الخارجي">
                                                               
   </div>

   <div class="form-group">
    <label><h6>العرض</h6></label>                                                    
  <input type="text" class = "form-control" name="Width" id="Width"  placeholder="ادخل العرض">
                                                               
   </div>

   <div class="form-group">
    <label><h6>الوزن</h6></label>                                                    
  <input type="text" class = "form-control" name="wieght" id="wieght"  placeholder="ادخل الوزن">
                                                               
   </div>

   <div class="form-group">
    <label><h6>الارتفاع</h6></label>                                                    
  <input type="text" class = "form-control" name="Hieght" id="Hieght"  placeholder="ادخل الارتفاع">
                                                               
   </div>

   <div class="form-group">
    <label><h6>الحجم او السعة</h6></label>                                                    
  <input type="text" class = "form-control" name="Size" id="Size"  placeholder="ادخل الحجم">
                                                               
   </div>


   


   <div class="form-group">
    <label><h6>قوة المحرك</h6></label>                                                    
  <input type="text" class = "form-control" name="Motorpower" id="Motorpower"  placeholder="ادخل قوة المحرك">
                                                               
   </div>


   <div class="form-group">
    <label><h6>الجهد الكهربى</h6></label>                                                    
  <input type="text" class = "form-control" name="Voltage" id="Voltage"  placeholder="ادخل الجهد الكهربى">
                                                               
   </div>

   


   <div class="form-group">
    <label><h6>الكمية</h6></label>                                                    
  <input type="text" class = "form-control" name="Stock" id="Stock"  placeholder="ادخل الكمية">
                                                               
   </div>


   <div class="form-group">
    <label><h6>الدولة المصنعة</h6></label>                                                    
  <input type="text" class = "form-control" name="Industry_Country" id="Industry_Country"  placeholder="ادخل الدولة">
                                                               
   </div>

   <?php

include("../config.php");

$UserID=$_SESSION ['id'];

$Companyinfo=mysqli_query($conn,"SELECT * FROM accounts where UserID='$UserID'");

$Company = mysqli_fetch_assoc($Companyinfo);

$CompanyNAME = $Company ['CompanyName'];
$CompanyCode = $Company ['CompanyCode'];


     ?>

   <div class="form-group">
    <label><h6>اسم الشركة لتجارى</h6></label>                                                    
  <input type="text" class = "form-control" name="CompanyName" value="<?php echo $CompanyNAME  ?>" disabled id="CompanyName"  placeholder="ادخل اسم الشركة">
                                                               
   </div>

   <div class="form-group">
    <label><h6>كود المورد</h6></label>                                                    
  <input type="text" class = "form-control" name="CompanyCode" value="<?php echo $CompanyCode  ?>" disabled id="CompanyCode"   placeholder="كود الشركة">
                                                               
   </div>


   <div class="form-group">
    <label><h6>مرفقات المنتج</h6></label>                                                    
    <input type="file" name="upload" id="upload" accept="application/pdf,application/vnd.ms-excel" />
                                                             
   </div>


   <div style="align-content:center">
  <div class="form-group">
           
 <label><h6>صور المنتج</h6></label>

 <div class="row">
<div class="col-lg-6 mb-2 pr-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="imagePreviews"></div>
<div class="col-lg-6 mb-2 pl-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="imagePreviews2"></div>
<div class="col-lg-6 pr-lg-1 mb-2"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="imagePreviews3"></div>
<div class="col-lg-6 pl-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="imagePreviews4"></div>
<div class="col-lg-6 pl-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="imagePreviews5"></div>
  </div> 
  <div>
  <input type="file" name="fileUploaderControls1" id="fileUploaderControls1" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
  <input type="file" name="fileUploaderControls2" id="fileUploaderControls2" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
  <input type="file" name="fileUploaderControls3" id="fileUploaderControls3" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
  <input type="file" name="fileUploaderControls4" id="fileUploaderControls4" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
  <input type="file" name="fileUploaderControls5" id="fileUploaderControls5" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
  
  </div>       
   </div> 

   </div>

</div>


   <!-- manifactorial -->  

<div id="manifac" style="display:none;">

<div class="form-group">
    <label><h6>اسم الشركة لتجارى</h6></label>                                                    
  <input type="text" class = "form-control" name="CompanyNames" value="<?php echo $CompanyNAME  ?>" disabled id="CompanyNames"  placeholder="ادخل اسم الشركة">
                                                               
   </div>


   <div class="form-group">
    <label><h6>كود المورد </h6></label>                                                    
  <input type="text" class = "form-control" name="CompanyCodes" value="<?php echo $CompanyCode?>" disabled id="CompanyCodes"  placeholder="ادخل اسم الشركة">
                                                               
   </div>

   <div class="form-group">
    <label><h6>خدمات الشركة</h6></label>                                                    
  <textarea class = "form-control" name="Services" id="Services" required="" placeholder="ادخل الخدمة"></textarea>
                                                               
   </div>

   <div class="form-group">
    <label><h6>مرفقات المنتج</h6></label>                                                    
    <input type="file" name="uploads" id="uploads" accept="application/pdf,application/vnd.ms-excel" />
                                                             
   </div>

   <div style="align-content:center">
  <div class="form-group">

   <label><h6>بروفايل الشركة</h6></label>

     <img src="../images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewc"  />

     </div>

      <div>
   <input type="file" name="fileUploaderControlc" id="fileUploaderControlc" style="display:none;" accept="image/x-png, image/gif, image/jpeg, image/jpg">
   </div>
   </div>
   
</div>
                                                                                                              
    </fieldset>
    </form>
           
  <div class="modal-footer" style="justify-content:normal;">
  <button type="submit" class="btn btn-primary" id="SaveProduct"> اضافة</button>
  <button type="submit" class="btn btn-primary" id="UpdateProduct" style="display:none;"> تعديل</button>
   <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
           
   </div>
  </div>                                    
  </div>
  </div>                            
</div>
 </div>
 </div>





<!--  edit product modal -->
           



 <div class="modal fade" id="Editsliderimages">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>تعديل محتوى للصفحة</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">

            <div style="align-content:center">
           <div class="form-group">
           
            <label><h6>صور الصفحة</h6></label>

            <input type="hidden" id="Slider_ImageID">

          <div class="row">
 <div class="col-lg-6 mb-2 pr-lg-1"><img src="../images/NoImage.jpg"  alt="" class="img-fluid rounded shadow-sm" id="sliderimage1"></div>
<div class="col-lg-6 mb-2 pl-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="sliderimage2"></div>
<div class="col-lg-6 mb-2 pl-lg-1"><img src="../images/NoImage.jpg" alt="" class="img-fluid rounded shadow-sm" id="sliderimage3"></div>
    <div>
   <input type="file" name="fileUploaderControlsliderimage1" id="fileUploaderControlsliderimage1" style="display:none;">
   <input type="file" name="fileUploaderControlsliderimage2" id="fileUploaderControlsliderimage2" style="display:none;">
   <input type="file" name="fileUploaderControlsliderimage3" id="fileUploaderControlsliderimage3" style="display:none;">
   </div>
  </div>        
   </div>  
  </div>

  <div class="form-group">
 <label><h6>محتوي الصورة الاولي</h6></label>                                                    
 <input class = "form-controls" name="Slider_Description" id="Slider_Description" required="" placeholder="ادخل الوصف">
                                                               
  </div>

  <div class="form-group">
 <label><h6>محتوى الصورة التانية</h6></label>                                                    
 <input class = "form-controls" name="SliderDescription2" id="SliderDescription2" required="" placeholder="ادخل الوصف">
                                                               
  </div>

  <div class="form-group">
 <label><h6>محتوى الصورة الثالثة</h6></label>                                                    
 <input class = "form-controls" name="SliderDescription3" id="SliderDescription3" required="" placeholder="ادخل الوصف">
                                                               
  </div>

  <div class="form-group">
 <label><h6>محتوى الموقع </h6></label>                                                    
 <textarea class = "form-controls" name="WebsiteInfo" id="WebsiteInfo" required="" placeholder="ادخل الوصف"></textarea>
                                                               
  </div>

  <div class="form-group">
 <label><h6>رقم هاتف الموقع</h6></label>                                                    
 <input class = "form-controls" name="SiteMobile" id="SiteMobile" required="" placeholder="ادخل رقم الهاتف">
                                                               
  </div>

  </div>



  <div class="modal-footer" style="padding-left:220px">

<a href="#" class="btn btn-success" id="UpdateSlider">تعديل</a>
<a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
</div>
           
        </div>
    </div>
</div>





<div class="modal fade" id="EditContactUS">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3>تعديل محتوى صفحة اتصل بنا</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">

           

       <div class="form-group">
       <label><h6>وصف الصفحة</h6></label>                                                    
    <textarea class = "form-controls" name="ContactInfo" id="ContactInfo" required="" placeholder="ادخل وصف الصفحة"></textarea>
                                                               
      </div>

      <div class="form-group">
       <label><h6>موقع الشركة</h6></label>                                                    
    <input type ="text" class = "form-controls"   name="OfficeLocation" id="OfficeLocation" required="" placeholder="ادخل هاتف الشركة">
                                                               
      </div>

      <div class="form-group">
       <label><h6>هاتف الشركة</h6></label>                                                    
    <input type ="text" class = "form-controls"  name="OfficeMobile" id="OfficeMobile" required="" placeholder="ادخل موقع الشركة">
                                                               
      </div>

      <div class="form-group">
       <label><h6>ايميل الشركة</h6></label>                                                    
    <input type ="text" class = "form-controls"  name="OfficeEmail" id="OfficeEmail" required="" placeholder="ادخل البريد الالكترونى للشركة">
                                                               
      </div>

      <div class="form-group">
       <label><h6>مواعيد العمل </h6></label>                                                    
    <input type ="text" class = "form-controls"  name="OfficeAppointment" id="OfficeAppointment" required="" placeholder="مواعيد العمل">
                                                               
      </div>

      <div class="form-group">
       <label><h6>ساعات العمل </h6></label>                                                    
    <input type ="text" class = "form-controls"  name="WorkHours" id="WorkHours" required="" placeholder="ساعات العمل">
                                                               
      </div>

    </div>



  <div class="modal-footer" style="padding-left:220px">

<a href="#" class="btn btn-success" id="UpdateContactUs">تعديل</a>
<a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
</div>
           
        </div>
    </div>
</div>









     
    





                     
              
              






        
                     