<?php include("inc/header.php"); 


$query2=mysqli_query($conn,"SELECT * FROM  members_subscribtions");

$result=mysqli_num_rows($query2);



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
                                    
                                    <h4 class="page-title"> ادارة المدفوعات</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">اجمالي المدفوعات</h3>
                                    <h3 class="my-3" data-plugin="counterup"><?php echo 880 ?> <i class="fas fa-repeat-1-alt"></i></h3>
                                   
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-user float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">عدد  المشتركين</h3>
                                    <h3 class="my-3"><span data-plugin="counterup"><?php echo $result ?></span></h3>
                                 
                                </div>
                            </div>

                         

                           
                        </div>
                        <!-- end row -->

                      

            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead_dark">
                <tr>
                <th class="th_text">اسم المشترك </th>
                    <th cl ass="th_text">تاريخ دفع الاشتراك </th>
                   
                    <th class="th_text">المبلغ</th>

                </tr>
            </thead>
            <tbody>
                <?php
                 $result=mysqli_query($conn,"SELECT * FROM subscriptions");
                 
                  while($row=mysqli_fetch_assoc($result))
                      {

                        
                    ?>
                <tr>
                
                    <td><?php echo $row['name']  ?></td>

                    <td><?php echo $row['startdate']  ?></td>
                   
                    <td><?php echo $row['price_after_tax']  ?></td>
            
                  
                </tr>

                <?php
              

                      }

                ?>                 
                   
            </tbody>
        </table>

                       
                     
                        
        </div> <!-- end container-fluid -->

         </div> <!-- end content -->




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