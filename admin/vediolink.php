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
                                    
                                    <h4 class="page-title">فيديوهات النادى</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة فيديو جديد
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text">رقم الرابط</th>
                    <th cl ass="th_text">عنوان الرابط</th>
                   
                    <th class="th_text">الرابط</th>

                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM vedios");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        
                    ?>
                <tr>
                <td><?php echo $num; ?></td>
                    <td><?php echo $row['Vedio_Title']  ?></td>

                    <td><?php echo $row['Vedio_Link']  ?></td>
                                   
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editvedio(<?php echo $row['VedioID'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeleteConfirmationvedio" onclick="Deletevediofunction(<?php echo $row['VedioID'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة رابط جديد</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>
  <div class="table-responsive">
    <table class="table" id="links">
     <tr>
     <th width="1%"> </th>
      <th width="50%">  <label><h6>عنوان الرابط</h6></label> </th>

      <th width="50%">الرابط</th>
           
     </tr>
     <tr class="lnksnames">
     <td>  <button type="button" name="addlink" id="addlink" class="btn btn-success btn-xs">+</button> </td>
      
      <td ><textarea name="paragraph_text" class="form-control" id="Vedio_Title"  cols="3" rows="3" maxlength=100></textarea> </td>
      <td ><textarea name="paragraph_text" class="form-control" id="Vedio_Link"  cols="3" rows="3" maxlength=100></textarea> </td>
       
    </td>
      
     </tr>
    </table>
   
   
   <div align="center">

  <button type="submit"  class="btn btn-info mb-2" id = "SaveLink"><i class="fa fa-plus-square"></i> <span>حفظ</span></button>

</div>
  
 
</form>

     </div>
     </div>
 </div>
 </div>
 </div>




 <!-- edt popup -->

 <div class="body">                   
                            <!-- larg modal -->
     <div class="modal fade bd-example-emodal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">تعديل الرابط</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>
  <div class="table-responsive">
    <table class="table">
     <tr>
    
      <th width="50%">  <label><h6>عنوان الرابط</h6></label> </th>

      <th width="50%">الرابط</th>
           
     </tr>
     <tr>
    
      
      <td ><textarea name="paragraph_text" class="form-control" id="Vedio_Titlee"  cols="3" rows="3" maxlength=100></textarea> </td>
      <td ><textarea name="paragraph_text" class="form-control" id="Vedio_Linke"  cols="3" rows="3" maxlength=100></textarea> </td>
       
    </td>
      
     </tr>
    </table>
   
   
   <div align="center">

  <button type="submit"  class="btn btn-info mb-2" id = "editLink"><i class="fa fa-pen-square"></i> <span>تعديل</span></button>

</div>
  
 
</form>

     </div>
     </div>
 </div>
 </div>
 </div>















 <!--  delete popup -->

 
 <div class="modal fade" id="DeleteConfirmationvedio">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeletevedio()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>