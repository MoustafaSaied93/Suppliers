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
                                    
                                    <h4 class="page-title">فصول التدريب</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة فصل تدريبي
                            </button>

                         <br> <br>

            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
              
                    <th class="th_text"> فصل التدريب بالعربية </th>
                   
                    <th class="th_text">فصل التدريب بالانجليزية</th>

                    <th class="th_text">المدرب</th>

                    <th class="th_text">صورة</th>


                   
                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM classes");
          
                  while($row=mysqli_fetch_assoc($result))
                      {

                        
                        if($row['image']!="")
                        {
                            

                        $photo='<td> <img src="assets/images/'.$row['image'].'" height="50" width="50"></td>';
                        }

                        else{

                            $photo='<td> <img src="assets/images/NoImage.jpg" height="50" width="50"></td>';


                        }
                          
                        
                    ?>
                <tr>
                
                    <td><?php echo $row['class_name_ar']  ?></td>


                    <td><?php echo $row['class_name_en']  ?></td>

                    <td><?php echo $row['trainer_id']  ?></td>

                    <?php echo $photo  ?>
                                     
                    <td>
    
                    &nbsp;  &nbsp;
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editclass(<?php echo $row['class_id'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>
                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#Deleteclassconfirmation" onclick="Deleteclassfunction(<?php echo $row['class_id'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
                    </td>
                </tr>

                <?php
               

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
     <h5 class="modal-title h4" id="orders_">اضافة فصل تدريبي</h5>
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
    <label for="o1">الفصل التدريبي بالعربية</label>
    <input type="text" class="form-control" id="class_name_ar" placeholder=" الفصل التدريبي بالعربى" maxlength=30>
  </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label for="o1">الفصل التدريبي بالانجليزي</label>
    <input type="text" class="form-control" id="class_name_en" placeholder="الفصل التدريبي بالانجليزى" maxlength=30>
  </div>
      
    </div>


  </div>

  </div>



  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
     <label for="o1">المدرب</label>
     <select class="form-control" id="trainer_id">

      <?php

      $firstteam=mysqli_query($conn," SELECT trainer_name_ar FROM trainer");


     while( $item = mysqli_fetch_assoc($firstteam))
     {

    echo' <option value="'.$item['trainer_name_ar'].'">'.$item['trainer_name_ar'].' </option>';
                       
      }

      ?>
 
      </select>
      </div>

    </div>
   




  </div>

  </div>



<div style="align-content:center">
  <div class="form-group">

  <label for="o1">صورة للفصل التدريبي</label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewclass" />

     </div>
      <div>


   <input type="file" name="fileUploaderClass" id="fileUploaderClass" style="display:none;"  accept="image/*">
   </div>
   </div>


  <button type="submit" class="btn btn-success mb-2" id = "Saveclass"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>

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
     <h5 class="modal-title h4" id="orders_">تعديل بيانات الفصل التدريبي</h5>
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
    <label for="o1">الفصل التدريبي بالعربية</label>
    <input type="text" class="form-control" id="eclass_name_ar" placeholder="اسم المدرب بالعربى" maxlength=30>
  </div>

    </div>
    <div class="col">

    <div class="form-group">
    <label for="o1">الفصل التدريبي بالانجليزي</label>
    <input type="text" class="form-control" id="eclass_name_en" placeholder="اسم المدرب بالانجليزى" maxlength=30>
  </div>
      
    </div>


  </div>

  </div>



  <div class="container">
                                                                                                     
  <div class="row">
    <div class="col">

    <div class="form-group">
     <label for="o1">المدرب</label>
     <select class="form-control" id="etrainer_id">

      <?php

      $firstteam=mysqli_query($conn," SELECT trainer_name_ar FROM trainer");


     while( $item = mysqli_fetch_assoc($firstteam))
     {

    echo' <option value="'.$item['trainer_name_ar'].'">'.$item['trainer_name_ar'].' </option>';
                       
      }

      ?>
 
      </select>
      </div>

    </div>
   




  </div>

  </div>



<div style="align-content:center">
  <div class="form-group">

  <label for="o1">صورة للفصل التدريبي</label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewclass1" />

     </div>
      <div>


   <input type="file" name="fileUploaderClass1" id="fileUploaderClass1" style="display:none;"  accept="image/*">
   </div>
   </div>

                                                                           
  <button type="submit" class="btn btn-success mb-2" id = "editclass"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</form>

     </div>
     </div>
 </div>
 </div>


 <!--  delete popup -->

 
 <div class="modal fade" id="Deleteclassconfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmclassDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>



                

<?php include_once("inc/footer.php") ?>