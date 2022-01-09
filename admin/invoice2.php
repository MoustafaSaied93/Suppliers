


<?php include("inc/header.php"); 

// invoce setting


$querysett=mysqli_query($conn,"SELECT * FROM  general_settings where setting_id=2");


$data=mysqli_fetch_assoc($querysett);


$id = $_GET['id'];


$subdata=mysqli_query($conn,"SELECT * FROM inventory where inventory_number ='$id'

");

$CHECKVAL=mysqli_num_rows($subdata);




if($CHECKVAL<1)

{

    exit;


}

$result=mysqli_fetch_assoc($subdata);


$subid=$result['subid'];


$subdata2=mysqli_query($conn,"SELECT * FROM subscriptions where subid  ='$subid'

");

$result3=mysqli_fetch_assoc($subdata2);


date_default_timezone_set("Asia/kuwait"); 

$namesub=$result['name'] ;

$subdata3=mysqli_query($conn,"SELECT * FROM members_subscribtions where name ='$namesub'

");


$result2=mysqli_fetch_assoc($subdata3);


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
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $data['company_name']   ?></a></li>
                                            
                                            <li class="breadcrumb-item active">تفاصيل الفاتورة</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">تفاصيل الفاتورة</h4>
                                </div>
                            </div>
                        </div>     


                      


                        <!-- end page title --> 



                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="float-sm-left">
                                                <h5 class="text-uppercase mt-0">فاتورة تفصيلية الى <?php echo $result['name'] ?>  </h5> 
                                                <h6> <?php echo $result['inventory_number'] ?>#  
                                                   <small> <i class="fa fa-calendar" aria-hidden="true"></i> <?php $result['time']  ?>   <?php echo $result['inventory_date'] ?>  </small>  
                                                </h6>

                                                

                                            </div>
                                           
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="float-sm-left mt-4">
                                                    <h6> من :</h6>
                                                    <address>
                                                    <p>  <i class="fas fa-shopping-bag"></i><strong> <?php echo $data['company_name'] ?> </strong></p>
                                                    <p>  <i class="fa fa-envelope" aria-hidden="true"></i><strong>  <?php echo $data['email'] ?> </strong></p>

                                                    <p>  <i class="fa fa-phone" aria-hidden="true"></i><strong> <?php echo $data['phone_number'] ?> </strong></p>
                                                    <p>  <i class="fa fa-map-marker" aria-hidden="true"></i><strong> <?php echo $data['city'] ?> </strong></p>
                                                   
                                                    
                                                    </address>
                                                </div>
                                                <div class="mt-4 text-sm-right">
                                                
                                                <address>
                                                <h6>  الى : </h6>
                                                <p>  <i class="fas fa-user"></i><strong> <?php echo $result['name'] ?> </strong></p>
                                                    <p>  <i class="fa fa-envelope" aria-hidden="true"></i><strong>  <?php echo $result2['email']?> </strong></p>

                                                    <p>  <i class="fa fa-phone" aria-hidden="true"></i><strong> <?php echo $result2['mobile_number']?> </strong></p>
                                                    </address>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-nowrap">
                                                        <thead>
                                                        <tr>
                                                          
                                                            
                                                            <th>بداية الاشتراك</th>
                                                            <th>نهاية الاشتراك</th>

                                                            <th> الكمية</th>


                                                            <th>السعر </th>
                                                            
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                       
                                                            
                                                           
                                                          
                                                            <td><?php echo $result3['startdate'] ?></td>
                                                            <td><?php echo $result3['enddate'] ?></td>
                                                            <td><?php echo $result3['month'] ?> </td>
                                                            <td><?php echo $data['price']*$data['tax']/100+$data['price'] ?> ريال</td>
                                                        </tr>
                                    
                                    
                                        
                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix mt-5">
                                                    <h5 class="small"><b>الشروط والسياسات</b></h5>

                                                    <small class="text-muted">
                                                   
                                               <h6> 1-لا يحق للمشترك سحب الاشتراك بعد اول يوم تدريب</h6>
                                               <h6> 2-يمنع اصطحاب اشخاص غير مشتركين للصالة</h6>
                                               <h6> 3-الالتزام بالنظافة وارتداء الكمامات والملابس الرياضية اثناء التدريب</h6>
                                               <h6> 4-الاتزام بمواعيد الكلاسات التدريبية</h6>
                                               <h6> 5-يمنع التدخين واصطحاب مشروبات او منشطات داخل الصالة</h6>
                                               <h6> 6-الادارة غير مسؤولة عن فقدان الجولات والاغراض الشخصية</h6>
                                               <h6> 7-اعادة الاوزان والمعدات  الى اماكنها بعد استخدامها</h6>
                                               <h6> 8-المحافظة علي النظام والنظافة داخل الصالة</h6>
                                               <h6> 9-يحق للادارة سحب اشتراك اى مشتركة اذا بدر منها ازعاج </h6>
                                               <h6> 10-لقد قرات الشروط الخاصة بطلب الاشتراك فى مركز الما النسائى الرياضي واتعهد الالتزام بذلك</h6>
                                              
                                              

                                                    </small>

                                                    <hr>

                                                    <div class="float-sm-right mt-4 mt-sm-0">
                                                    <img id="qrcode" />
                                               
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right mt-4">
                                                    <h3><b>المجموع :</b>   <?php echo $result3['price_after_tax'] ?> ريال</h3>
                                                    
                                                  
                                                    <hr>
                                                    
                                                    <div class="float-sm-right mt-4 mt-sm-0">
                                                    <img src="<?php echo $result['qrcode'] ?>"/>
                                               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        <hr>
                                        <div class="d-print-none">
                                            <div class="float-left">
                                          
                                                <a href="#" class="btn btn-danger waves-effect waves-light" onclick="history.back()"> عودة</a>
                                                &nbsp; &nbsp;
                                                <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light">طباعة</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->


                <?php include_once("inc/footer.php") ?>



