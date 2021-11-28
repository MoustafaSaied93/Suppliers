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
                                    
                                    <h4 class="page-title">فرق الدورى</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة فريق جديد
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text">رقم الفريق</th>
                    <th cl ass="th_text">اسم الفريق</th>
                   
                    <th class="th_text">شعار الفريق</th>

                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM teams");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        $img=$row['Team_Logo'];

                        if($img!="")
                        {
                            

                        $photo='<td> <img src="assets/images/logo/'.$row['Team_Logo'].'" height="50" width="50"></td>';
                        }

                        else{

                            $photo='<td> <img src="assets/images/NoImage.jpg" height="50" width="50"></td>';


                        }
                    ?>
                <tr>
                <td><?php echo $num  ?></td>

                    <td><?php echo $row['Team_Name']  ?></td>
                  
                    <?php echo $photo  ?>
                  
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editteam(<?php echo $row['Team_ID'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeleteConfirmationteam" onclick="Deleteteamfunction(<?php echo $row['Team_ID'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة فريق جديد</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="form-group">
    <label for="o1">اسم الفريق</label>
    <input type="text" class="form-control" id="Team_Name" placeholder="اسم الفريق" maxlength=30>
  </div>


<div style="align-content:center">
  <div class="form-group">

   <label><h6>شعار الفريق</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewteam" />

     </div>

      <div>
   <input type="file" name="fileUploaderControlteam" id="fileUploaderControlteam" style="display:none;" accept="image/*">
   </div>
   </div>

  <button type="submit" class="btn btn-success mb-2" id = "Saveteam"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>

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
     <h5 class="modal-title h4" id="orders_">تعديل بيانات الفريق</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
 <form>

  <div class="form-group">
    <label for="o1">اسم الفريق</label>
    <input type="text" class="form-control" id="Team_Namee" placeholder="اسم المدرب" maxlength=30>
  </div>





<div style="align-content:center">
  <div class="form-group">

   <label><h6>شعار الفريق</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewteam1" />

     </div>

      <div>
   <input type="file" name="fileUploaderControlteam1" id="fileUploaderControlteam1" style="display:none;" accept="image/*">
   </div>
   </div>

   

  <button type="submit" class="btn btn-success mb-2" id = "editteam"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</form>

     </div>
     </div>
 </div>
 </div>


 <!--  delete popup -->

 
 <div class="modal fade" id="DeleteConfirmationteam">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeleteteam()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>