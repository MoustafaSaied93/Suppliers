<?php include("inc/header.php"); 



?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">بيانات المدربين</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة مدرب
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> رقم المدرب</th>
                    <th class="th_text"> اسم المدرب</th>
                   
                    <th class="th_text">رقم الهاتف</th>

                    <th class="th_text">السن</th>


                    <th class="th_text">صورة المدرب</th>

                 

                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM trainer");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        $img=$row['image'];

                        if($img!="")
                        {
                            

                        $photo='<td> <img src="assets/images/coach/'.$row['image'].'" height="50" width="50"></td>';
                        }

                        else{

                            $photo='<td> <img src="assets/images/NoImage.jpg" height="50" width="50"></td>';


                        }
                    ?>
                <tr>
                <td><?php echo $num  ?></td>
                    <td><?php echo $row['trainer_name_ar']  ?></td>


                    <td><?php echo $row['mobile_number']  ?></td>

                    <td><?php echo $row['age']  ?></td>


                    <?php echo $photo  ?>
                 
                    
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="edittechniqalteam(<?php echo $row['trainer_id'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#Deletetrainerconfirmation" onclick="Deletetrainerfunction(<?php echo $row['trainer_id'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>

                    &nbsp;  &nbsp;


                  <a href="TrainerDetails.php?id=<?php echo $row['trainer_id']; ?>" class="btn btn-success"><i class="fa fa-info"></i>

                            تفاصيل</a>


                    </td>
                </tr>

                <?php
                $num=$num+1;

                      }

                ?>                 
                   
            </tbody>
        </table>

                       
                     
                        
        </div> <!-- end container-fluid -->

         </div> <!-- end content -->


<!-- add popup -->

    <div class="body">                   
                            <!-- larg modal -->
     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">اضافة مدرب</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label for="o1">اسم المدرب بالعربى</label>
    <input type="text" class="form-control" id="trainer_name_ar" placeholder="اسم المدرب بالعربى" maxlength=30>
  </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label for="o1">اسم المدرب بالانجليزي</label>
    <input type="text" class="form-control" id="trainer_name_en" placeholder="اسم المدرب بالانجليزى" maxlength=30>
  </div>
      
    </div>


  </div>

  </div>



  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
    <label for="o1">رقم الهاتف</label>
    <input type="text" class="form-control" id="mobile" placeholder="رقم الهاتف" maxlength=30>
  </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label for="o1">السن</label>
    <input type="text" class="form-control" id="age" placeholder="السن" maxlength=30>
  </div>
      
    </div>

    <div class="col">

    <div class="form-group">
    <label for="o1">الطول</label>
    <input type="text" class="form-control" id="hieght" placeholder="الطول" maxlength=30>
  </div>
      
    </div>


<div class="col">

<div class="form-group">
    <label for="o1">الوزن</label>
    <input type="text" class="form-control" id="wieght" placeholder="الوزن " maxlength=30>
  </div>
  
</div>


  </div>

  </div>



<div style="align-content:center">
  <div class="form-group">

   <label><h6>صورة المدرب</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewtech" />

     </div>
      <div>


   <input type="file" name="fileUploaderControltech" id="fileUploaderControltech" style="display:none;"  accept="image/*">
   </div>
   </div>



   <div class="form-group mt-3">
     <textarea class="form-control" name="descrip_ar" id="descrip_ar" rows="5" placeholder="التاريخ المهنى بالعربية" maxlength=300></textarea>
     </div>

     <div class="form-group mt-3">
     <textarea class="form-control" name="descrip_en" id="descrip_en" rows="5" placeholder="التاريخ المهنى بالانجليزية" maxlength=300></textarea>
     </div>
   

  <button type="submit" class="btn btn-success mb-2" id = "Savetrainer"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>

</form>

     </div>
     </div>
 </div>
 </div>







<!--  edit popup -->


 <div class="body">                   
                            <!-- larg modal -->
     <div class="modal fade bd-example-emodal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">تعديل بيانات المدرب</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
 <form>

 <div class="container">
                                                                                                     
  <div class="row">
 <div class="col">
                                                                                                   
  <div class="form-group">
<label for="o1">اسم المدرب بالعربى</label>
<input type="text" class="form-control" id="etrainer_name_ar" placeholder="اسم المدرب بالعربى" maxlength=30>
 </div>
                                                                                         
 </div>
<div class="col">
                                                                                                   
 <div class="form-group">
<label for="o1">اسم المدرب بالانجليزي</label>
<input type="text" class="form-control" id="etrainer_name_en" placeholder="اسم المدرب بالانجليزى" maxlength=30>
</div>
                                                                                                         
 </div>
                                                                                                   
                                                                                                   
 </div>
                                                                                                   
 </div>
                                                                                                   
                                                                                                   
 <div class="container">
                                                                                                                                                                                                        
     <div class="row">
      <div class="col">
                                                                                                   
      <div class="form-group">
     <label for="o1">رقم الهاتف</label>
 <input type="text" class="form-control" id="emobile" placeholder="رقم الهاتف" maxlength=30>
</div>
</div>
 <div class="col">
                                                                                                   
  <div class="form-group">
 <label for="o1">السن</label>
 <input type="text" class="form-control" id="eage" placeholder="السن" maxlength=30>
 </div>
                                                                                                         
 </div>
  <div class="col">
                                                                                                   
 <div class="form-group">
 <label for="o1">الطول</label>
<input type="text" class="form-control" id="ehieght" placeholder="الطول" maxlength=30>
 </div>
                                                                                                         
</div>
                                                                                                   
                                                                                                   
 <div class="col">
                                                                                                   
  <div class="form-group">
 <label for="o1">الوزن</label>
 <input type="text" class="form-control" id="ewieght" placeholder="الوزن " maxlength=30>
 </div>
                                                                                                     
 </div>
                                                                                                   
                                                                                                   
 </div>
                                                                                                   
   </div>
                                                                                                   
                                                                                                   
                                                                                                   
<div style="align-content:center">
<div class="form-group">
     <label><h6>صورة المدرب</h6></label>
                                                                                                   
  <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewtech1" />
                                                                                                   
     </div>
  <div>
                                                                                                   
                                                                                                   
<input type="file" name="fileUploaderControltech1" id="fileUploaderControltech1" style="display:none;" accept="image/*">
</div>
  </div>
                                                                                                   
                                                                                                   
                                                                                                   
     <div class="form-group mt-3">
 <textarea class="form-control" name="edescrip_ar" id="edescrip_ar" rows="5" placeholder="التاريخ المهنى بالعربية"></textarea>
     </div>
                                                                                                   
  <div class="form-group mt-3">
  <textarea class="form-control" name="edescrip_en" id="edescrip_en" rows="5" placeholder="التاريخ المهنى بالانجليزية"></textarea>
     </div>
                                                                                                      
   

  <button type="submit" class="btn btn-success mb-2" id = "edittrainer"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</form>

     </div>
     </div>
 </div>
 </div>


 <!--  delete popup -->

 
 <div class="modal fade" id="Deletetrainerconfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirtrainermDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>