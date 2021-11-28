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
                                    
                                    <h4 class="page-title">الاسليدر</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button  class="btn btn-success m-b-15" onclick="deletedata()" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة الاسليدر
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text">العنوان</th>

                    <th class="th_text">النص </th>
                   
                    <th class="th_text">الصورة </th>


                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM all_matches");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                      
                    ?>
                <tr>
                <td><?php echo $num  ?></td>
                    <td><?php echo $row['First_Team']  ?></td>

                    <td><?php echo $row['Second_Team']  ?></td>

          
                                       
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="editmatch(<?php echo $row['Match_ID'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeletematchConfirmations" onclick="Deletematchfunction(<?php echo $row['Match_ID'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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

         <div class="body">                   
 <!-- larg modal -->
     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">اضافة الاسليدر</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="form-group">
    <label for="o1">العنوان </label>
    <input type="text" class="form-control" id="Team_Name" placeholder="العنوان " maxlength=30>
  </div>

  <div class="form-group">
    <label for="o1">النص  </label>
    <input type="text" class="form-control" id="Team_Name" placeholder="النص " maxlength=30>
  </div>

<div style="align-content:center">
  <div class="form-group">

   <label><h6>الصورة </h6></label>

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




   
 <!--  delete popup -->

 
 <div class="modal fade" id="DeletematchConfirmations" tabindex="-1"aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmDeletematch()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
<?php include_once("inc/footer.php") ?>