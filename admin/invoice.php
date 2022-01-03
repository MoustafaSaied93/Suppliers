


<?php include("inc/header.php"); 

// invoce setting


$querysett=mysqli_query($conn,"SELECT * FROM  general_settings where setting_id=2");


$data=mysqli_fetch_assoc($querysett);


$id = $_GET['id'];


$subdata=mysqli_query($conn,"SELECT * FROM subscriptions where subid ='$id'

");

$CHECKVAL=mysqli_num_rows($subdata);



if($CHECKVAL<1)

{

    exit;


}

$result=mysqli_fetch_assoc($subdata);

date_default_timezone_set("Asia/kuwait"); 


$date = date('Y-m-d');


$date2 = date('d-m-Y');


$query4=mysqli_query($conn,"SELECT inventory_number FROM inventory  order by inventory_number DESC LIMIT 1 ");

      $CODE=mysqli_fetch_assoc($query4);


      $codes=$CODE['inventory_number'];

      if($codes==null)
  
      {
        $code=1;
  
      }
  
      else
       {
  
        $code=$codes +1;
  
      }








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
                                            
                                            <li class="breadcrumb-item active">فاتورة</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">فاتورة</h4>
                                </div>
                            </div>
                        </div>     


                        <input type ="hidden" id="subid" value="<?php echo $id  ?>">
                        <input type ="hidden" id="inventory_number" value="<?php echo $code?>">
                        <input type ="hidden" id="inventory_date" value="<?php echo $date2?>">
                        <input type ="hidden" id="name" value="<?php echo $result['name'] ?>">

                        <input type ="hidden" id="time" value="<?php echo date("h:i"); ?>">

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
                                                <h5 class="text-uppercase mt-0"><?php echo $data['company_name'] ?>  </h5>
                                            </div>
                                            <div class="float-sm-right mt-4 mt-sm-0">
                                                <h5>فاتورة #<?php echo $code ?> <br>
                                                    <small><?php echo $date2 ?></small>
                                                </h5>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="float-sm-left mt-4">
                                                    <address>
                                                    <p><strong> العنوان : </strong> <?php echo $data['city'] ?></p>
                                                     
                                                    <p><strong>رقم الجوال : </strong> <?php echo $data['phone_number'] ?></p>
                                                    
                                                    </address>
                                                </div>
                                                <div class="mt-4 text-sm-right">
                                                   
                                                <address>
                                                    <p><strong> رقم الطلب : </strong> <?php echo $code ?> </p>

                                                    <p><strong> التاريخ : </strong> <?php echo $date ?></p>

                                                    <p><strong> الوقت : </strong> <?php echo date("h:i"); ?></p>
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
                                                        <tr><th>#</th>
                                                            <th>اسم المشترك</th>
                                                            <th>سعر الاشتراك</th>
                                                            <th>بداية الاشتراك</th>
                                                            <th>نهاية الاشتراك</th>
                                                            <th>الاجمالي</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                        <td>1</td>
                                                            <td><?php echo $result['name'] ?></td>
                                                            <td><?php echo $result['price'] ?>ريال</td>
                                                          
                                                            <td><?php echo $result['startdate'] ?></td>
                                                            <td><?php echo $result['enddate'] ?></td>
                                                            <td><?php echo $result['price'] ?> ريال</td>
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
                                                    شروط الدفع والسياسات
يجب دفع جميع الحسابات في غضون 7 أيام من استلام الفاتورة. يتم الدفع بشيك أو ببطاقة ائتمان أو الدفع المباشر عبر الإنترنت. إذا لم يتم دفع الحساب في غضون 7 أيام ، فسيتم تحصيل الرسوم المحددة المتفق عليها المذكورة أعلاه على تفاصيل الائتمانات المقدمة كتأكيد للعمل المنجز.
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="text-right mt-4">
                                                    <p><b>المجموع :</b> <?php echo $result['price'] ?> ريال</p>
                                                    
                                                    <p><b>الضريبة :</b> <?php echo $data['tax'] ?> %</p>
                                                    <hr>
                                                    <h3>  <?php echo $result['price_after_tax'] ?> ريال  </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-print-none">
                                            <div class="float-left">
                                            <a href="#" class="btn btn-primary waves-effect waves-light" id="saveinventory">حفظ الفاتورة</a>

                                            &nbsp; &nbsp;
                                                <a href="#" class="btn btn-danger waves-effect waves-light" onclick="history.back()"> الغاء</a>
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



