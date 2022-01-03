<?php include("inc/header.php"); 


// عدد المشتركين
$query2=mysqli_query($conn,"SELECT * FROM  members_subscribtions");

$result=mysqli_num_rows($query2);



// عدد المدربين
$query1=mysqli_query($conn,"SELECT * FROM  trainer");

$result1=mysqli_num_rows($query1);


// اجمالى المدفوعات

$res = mysqli_query($conn,"SELECT sum(price_after_tax) FROM subscriptions");
$row = mysqli_fetch_row($res);
$sum = $row[0];
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
                                    
                                    <h4 class="page-title">الصفحة الرئيسية</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">عدد المشتركين</h3>
                                    <h3 class="my-3" data-plugin="counterup"><?php echo $result?> <i class="fas fa-repeat-1-alt"></i></h3>
                                   
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-user float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">عدد المدربين</h3>
                                    <h3 class="my-3"><span data-plugin="counterup"><?php echo $result1 ?></span></h3>
                                 
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers  float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0"> اجمالى المدفوعات</h3>
                                    <h3 class="my-3"><span data-plugin="counterup"><?php echo $sum ?></span></h3>
                                   
                                </div>
                            </div>

                           
                        </div>
                        <!-- end row -->


                     
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

            <?php include_once("inc/footer.php") ?>