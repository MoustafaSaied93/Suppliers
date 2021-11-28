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
                                    
                                    <h4 class="page-title">بيانات اللاعبين</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button id="" class="btn btn-success m-b-15" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة لاعب جديد
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> كود اللاعب</th>
                    <th class="th_text">اسم اللاعب</th>
                   
                    <th class="th_text">المركز</th>

                    <th class="th_text">رقم اللاعب</th>

                    <th class="th_text">صورة اللاعب</th>
                    <th class="th_text">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM players");
                 $num=1;
                  while($row=mysqli_fetch_assoc($result))
                      {

                        $img=$row['image'];

                        if($img!="")
                        {
                            

                        $photo='<td> <img src="assets/images/players/'.$row['image'].'" height="50" width="50"></td>';
                        }

                        else{

                            $photo='<td> <img src="assets/images/NoImage.jpg" height="50" width="50"></td>';


                        }
                    ?>
                <tr>
                <td><?php echo $num  ?></td>
                    <td><?php echo $row['PlayerName']  ?></td>

                    <td><?php echo $row['position']  ?></td>

                    <td><?php echo $row['number']  ?></td>
                    <?php echo $photo  ?>
                    
                    <td>
                    <button type="button" id="data-image-id" data-toggle="modal" data-target=".bd-example-emodal-lg" onclick="editplayer(<?php echo $row['PlayerID'];?>)" class="btn btn-primary"> <i class="fa fa-pen"></i> تعديل</button>

                    &nbsp;  &nbsp;

                    <button type="button" id="data-image-id" data-toggle="modal" data-target="#DeleteplayerConfirmation" onclick="Deleteplayerfunction(<?php echo $row['PlayerID'];?>)" class="btn btn-danger"> <i class="fa fa-trash"></i> حذف</button>
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
     <h5 class="modal-title h4" id="orders_">اضافة لاعب جديد</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <div class="form-group">
    <label for="o1">اسم اللاعب</label>
    <input type="text" class="form-control" id="PlayerName" placeholder="اسم اللاعب" maxlength=30>
  </div>


  <div class="form-group">
    <label for="o1">المركز</label>
    <input type="text" class="form-control" id="position" placeholder="المركز" maxlength=30>
  </div>

  <div class="form-group">
    <label for="o1">رقم اللاعب</label>
    <input type="text" class="form-control" id="number" placeholder="رقم اللاعب" maxlength=10>
  </div>



<div style="align-content:center">
  <div class="form-group">

   <label><h6>صورة اللاعب</h6></label>

     <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewplyer" />

     </div>

      <div>
   <input type="file" name="fileUploaderControlplayer" id="fileUploaderControlplayer" style="display:none;" accept="image/*">
   </div>
   </div>
   

  <button type="submit" class="btn btn-success mb-2" id = "Saveplayer"><i class="fa fa-plus-square"></i> <span>أضافة</span></button>

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
     <h5 class="modal-title h4" id="orders_">تعديل بيانات اللاعب</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
  <form>

  <form>

<div class="form-group">
  <label for="o1">اسم اللاعب</label>
  <input type="text" class="form-control" id="PlayerNamee" placeholder="اسم اللاعب" maxlength=30>
</div>


<div class="form-group">
  <label for="o1">المركز</label>
  <input type="text" class="form-control" id="positione" placeholder="المركز" maxlength=30>
</div>

<div class="form-group">
  <label for="o1">رقم اللاعب</label>
  <input type="text" class="form-control" id="numbere" placeholder="رقم اللاعب" maxlength=10>
</div>



<div style="align-content:center">
<div class="form-group">

 <label><h6>صورة اللاعب</h6></label>

   <img src="assets/images/NoImage.jpg" style="margin:10px" height="200" width="200" id="imagePreviewplyer1" />

   </div>
    <div>
 <input type="file" name="fileUploaderControlplayer1" id="fileUploaderControlplayer1" style="display:none;" accept="image/*">
 </div>
 </div>
 

<button type="submit" class="btn btn-success mb-2" id = "editplayer"><i class="fa fa-pen"></i> <span>تعديل</span></button>

</form>
     </div>
     </div>
 </div>
 </div>



   
 <!--  delete popup -->

 
 <div class="modal fade" id="DeleteplayerConfirmation">
    <div class="modal-dialog">

        <div class="modal-content">
          
            <div class="modal-header">

                <h3> حذف العنصر</h3>
            </div>
            <div class="modal-body" style="padding-left:220px">
                <h4>هل انت متاكد من عملية الحذف</h4>
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-danger" onclick="ConfirmplayerDelete()">تاكيد</a>
                <a href="#" class="btn btn-primary" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                

<?php include_once("inc/footer.php") ?>