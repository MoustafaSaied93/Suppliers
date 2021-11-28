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
                                    
                                    <h4 class="page-title">بطولات النادى</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة بطولة جديدة
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text">رقم البطولة</th>
                    <th cl ass="th_text">اسم البطولة</th>
                   
                    <th class="th_text">صورة البطولة</th>

                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM club_shampion");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        $img=$row['image'];

                        if($img!="")
                        {
                            

                        $photo='<td> <img src="assets/images/'.$row['image'].'" height="50" width="50"></td>';
                        }

                        else{

                            $photo='<td> <img src="assets/images/NoImage.jpg" height="50" width="50"></td>';


                        }
                    ?>
                <tr>
                <td><?php echo $num  ?></td>

                    <td><?php echo $row['shampion_Name']  ?></td>
                  
                    <?php echo $photo  ?>
                  
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editchampss(<?php echo $row['club_shampion_id'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeleteConfirmationshamp" onclick="Deleteshampfunction(<?php echo $row['club_shampion_id'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة بطولة جديدة</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        


  <form>
  <div class="table-responsive">
    <table class="table" id="shamp">
     <tr>
     <th width="1%"> </th>
      <th width="60%">  <label><h6>اسم البطولة</h6></label> </th>

      <th width="30%">الصورة</th>
           
     </tr>
     <tr class="shampsonname">
     <td>  <button type="button" name="addshamp" id="addshamp" class="btn btn-success btn-xs">+</button> </td>
      
     <td>  <input type="text" class = "form-control" id="shampion_Name" placeholder="اسم البطولة" maxlength="50"> </td>

     <td>
     
     <input type="file" name="fileUploaderControlshamp" id="fileUploaderControlshamp" accept="image/*" multiple>
    </td>
     </tr>
    </table>
   <div align="center">

  <button type="submit"  class="btn btn-info mb-2" id = "Saveshampion"><i class="fa fa-plus-square"></i> <span>حفظ</span></button>

</div>
  
 
</form>
  

     </div>
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
     <h5 class="modal-title h4" id="orders_">تعديل بيانات البطولة</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
 <form>
  <div class="table-responsive">
    <table class="table">
     <tr>
     
      <th width="60%">  <label><h6>اسم البطولة</h6></label> </th>

      <th width="30%">الصورة</th>
           
     </tr>
     <tr>
    
      
     <td>  <input type="text" class = "form-control" id="shampion_Namee" placeholder="اسم البطولة" maxlength="50"> </td>

     <td>
     <img src="assets/images/NoImage.jpg" style="margin:-10px" height="100" width="200" id="imagePreviewshamp1" />
     <input type="file" name="fileUploaderControlshamp1" id="fileUploaderControlshamp1" style="display:none" accept="image/*" multiple>
    </td>
     </tr>
    </table>
   <div align="center">

  <button type="submit"  class="btn btn-info mb-2" id = "editshamp"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</div>
  
 
</form>
 

     </div>
     </div>
 </div>
 </div>
 </div>

 <!--  delete popup -->

 
 <div class="modal fade" id="DeleteConfirmationshamp">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeletechamp()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>