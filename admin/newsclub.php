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
                                    
                                    <h4 class="page-title">اخبار النادى</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button class="btn btn-success m-b-15" type="button" onclick="updatedata()" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة خبر
                            </button>

                         <br> <br>

            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> رقم الخبر</th>
                    <th class="th_text">عنوان الخبر</th>
                   
                    <th class="th_text">تاريخ اصدار الخبر</th>
                   
                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT Tille, PublishDate,news_club_ID FROM news_club");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        
                    ?>
                <tr>
                <td><?php echo $num  ?></td>
                    <td><?php echo $row['Tille']  ?></td>


                    <td><?php echo $row['PublishDate']  ?></td>
                                     
                    <td>
                    <button type="button" id="data-image-id" class="btn btn-success"> <i class="fas fa-book"></i> تفاصيل</button>
                    &nbsp;  &nbsp;
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="editnew(<?php echo $row['news_club_ID'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>
                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeletenewsConfirmation" onclick="Deletenewsfunction(<?php echo $row['news_club_ID'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة خبر جديد</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form >

  <div class="form-group">
    <label for="o1">عنوان الخبر</label>
    <input type="text" class="form-control" id="Tille" placeholder="عنوان الخبر" maxlength=100>
  </div>

  <div class="form-group">
  <label for="o1">تاريخ اصدار الخبر</label>
    <input type="text" class="form-control" id="PublishDate" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
 
</div> 

<div class="form-group">
  <label for="o1">تفاصيل الخبر</label>
  <textarea name="paragraph_text" class="form-control" id="New"  cols="30" rows="10" maxlength=10000></textarea>
 
</div> 


<div style="align-content:center">
  <div class="form-group">

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn1" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn2" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn3" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn4" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn5" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn6" />
     <img src="assets/images/NoImage.jpg" style="margin:10px" height="150" width="150" id="imagePreviewn7" />
     </div>

    <div>
   <input type="file" name="fileUploaderControln" id="fileUploaderControln" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln1" id="fileUploaderControln1" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln2" id="fileUploaderControln2" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln3" id="fileUploaderControln3" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln4" id="fileUploaderControln4" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln5" id="fileUploaderControln5" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln6" id="fileUploaderControln6" style="display:none;" accept="image/*">
   <input type="file" name="fileUploaderControln7" id="fileUploaderControln7" style="display:none;" accept="image/*">
   </div>
   </div>
  

  <button type="submit" class="btn btn-success mb-2" id = "Savenew"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>
  <div id="editnewbutton" style="display:none">

<button type="submit"   class="btn btn-info mb-2"  id = "editnew"><i class="fa fa-pen"></i> <span>تعديل</span></button>
</div>
</form>

     </div>
     </div>
 </div>
 </div>


 
 <!--  delete popup -->

 
 <div class="modal fade" id="DeletenewsConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmnewDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>