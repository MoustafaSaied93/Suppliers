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
                                    
                                    <h4 class="page-title">جدول المباريات</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <button  class="btn btn-success m-b-15" onclick="deletedata()" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> اضافة مباراة
                            </button>

                            <br> <br>


            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text"> رقم المباراة</th>

                    <th class="th_text">الفريق الاول</th>
                   
                    <th class="th_text">الفريق التانى</th>

                    <th class="th_text">تاريخ المبارة</th>

                    <th class="th_text">اليوم</th>

                    <th class="th_text">الساعة</th>

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

                    <td><?php echo $row['MatchDate']  ?></td>

                    <td><?php echo $row['Day']  ?></td>

                    <td><?php echo $row['Hour']  ?></td>
                                       
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


<!-- add popup -->

    <div class="body">                   
                            <!-- larg modal -->
     <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="orders_" aria-hidden="true">
         <div class="modal-dialog modal-lg">
         <div class="modal-content">
        <div class="modal-header">
     <h5 class="modal-title h4" id="orders_">اضافة مبارة </h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
    </div>
 <div class="modal-body">               
                                        
 <form >

<div class="table-responsive">
  <table class="table" id="crud_table">
   <tr>
  
    <th width="25%">  <label><h6>الفريق الاول</h6></label> </th>

    <th width="25%">الفريق الثانى</th>
    <th width="25%">تاريخ المباراة</th>

    <th width="25%">ميعاد المباراة</th>
    
   </tr>
   <tr class="MatchName">
   
    <td>    
    <select class="custom-select" id="First_Team">

    <?php

    $firstteam=mysqli_query($conn," SELECT Team_Name FROM teams");


    while( $item = mysqli_fetch_assoc($firstteam))
    {

        echo' <option value="'.$item['Team_Name'].'">'.$item['Team_Name'].' </option>';
        
    }
     ?>
     
    </select>
     </td>

    <td>

    <select class="custom-select" id="Second_Team">
    <?php
       $firstteam=mysqli_query($conn," SELECT Team_Name FROM teams");


    while( $item2 = mysqli_fetch_assoc($firstteam))
    {

        echo' <option value="'.$item2['Team_Name'].'">'.$item2['Team_Name'].' </option>';
        
    }
     ?>


    </select>
        
   </td>

    <td> 

    <div class="input-group">
    <input type="text" class="form-control" id="MatchDate" placeholder="mm/dd/yyyy" data-provide="datepicker" data-date-autoclose="true">
    <div class="input-group-append">
  <span class="input-group-text"><i class="icon-calender"></i></span>
</div> 
 </div><!-- input-group -->
                                                                   
    </td>

    <td> 
    <div class="input-group">
     <input id="timepicker2" type="text" class="form-control">
    <div class="input-group-append">
 <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
 </div>
</div><!-- input-group -->
</td>
    
    
   </tr>
  </table>
 
 
 <div align="center">

<button type="submit"  class="btn btn-info mb-2" id = "Savematches"><i class="fa fa-plus-square"></i> <span>حفظ</span></button>
<div id="editbutton" style="display:none">

<button type="submit"   class="btn btn-info mb-2"  id = "editmatches"><i class="fa fa-pen"></i> <span>تعديل</span></button>
</div>
</div>

</form>

     </div>
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