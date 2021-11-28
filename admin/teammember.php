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
                                    
                                    <h4 class="page-title">مجلس الادارة</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة عضو
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> رقم العضو</th>
                    <th class="th_text">اسم العضو</th>
                   
                    <th class="th_text">الوظيفة</th>
                    <th class="th_text">صورة العضو</th>
                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM teammember");
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
                    <td><?php echo $row['member_name']  ?></td>


                    <td><?php echo $row['title']  ?></td>
                    <?php echo $photo  ?>
                    
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editmember(<?php echo $row['member_id'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeleteConfirmation" onclick="Deletememberfunction(<?php echo $row['member_id'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة عضو جديد</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="form-group">
    <label for="o1">اسم العضو</label>
    <input type="text" class="form-control" id="member_name" placeholder="اسم العضو" maxlength=30>
  </div>


  <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">المسمى الظيفى</label>
        </div>
        <select class="custom-select" id="title">
          <option value="رئيس مجلس الادارة">رئيس مجلس الادارة</option>
          <option value="نائب رئيس مجلس الادارة">نائب رئيس مجلس الادارة </option>
          <option value="عضو مجلس الادارة">عضو مجلس الادارة</option>
          
        </select>
      </div>
    </div>


<div style="align-content:center">
  <div class="form-group">

   <label><h6>صورة العضو</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewc" />

     </div>

      <div>
   <input type="file" name="fileUploaderControl" id="fileUploaderControl" style="display:none;" accept="image/*">
   </div>
   </div>
   

  <button type="submit" class="btn btn-success mb-2" id = "Savemember"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>

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
     <h5 class="modal-title h4" id="orders_">تعديل بيانات العضو</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="form-group">
    <label for="o1">اسم العضو</label>
    <input type="text" class="form-control" id="member_namee" placeholder="اسم العضو" maxlength=30>
  </div>


  <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">المسمى الظيفى</label>
        </div>
        <select class="custom-select" id="titlee">
          <option value="رئيس مجلس الادارة">رئيس مجلس الادارة</option>
          <option value="نائب رئيس مجلس الادارة">نائب رئيس مجلس الادارة </option>
          <option value="عضو مجلس الادارة">عضو مجلس الادارة</option>
          
        </select>
      </div>
    </div>


<div style="align-content:center">
  <div class="form-group">

   <label><h6>صورة العضو</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewc1" />

     </div>

      <div>
   <input type="file" name="fileUploaderControl1" id="fileUploaderControl1" style="display:none;" accept="image/*">
   </div>
   </div>
   

  <button type="submit" class="btn btn-success mb-2" id = "editmember"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</form>

     </div>
     </div>
 </div>
 </div>



   
 <!--  delete popup -->

 
 <div class="modal fade" id="DeleteConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>