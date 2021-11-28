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
                                    
                                    <h4 class="page-title">الصفحة الرئيسية</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">طلبات المشتركين</h3>
                                    <h3 class="my-3" data-plugin="counterup"><?php echo 1?> <i class="fas fa-repeat-1-alt"></i></h3>
                                   
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-user float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">حسابات العملاء</h3>
                                    <h3 class="my-3"><span data-plugin="counterup"><?php echo 1 ?></span></h3>
                                 
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-envelope  float-right m-0 h2 text-muted"></i>
                                    <h3 class="text-muted text-uppercase mt-0">رسائل العملاء</h3>
                                    <h3 class="my-3"><span data-plugin="counterup"><?php echo 1 ?></span></h3>
                                   
                                </div>
                            </div>

                           
                        </div>
                        <!-- end row -->


                     
                        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

            <?php include_once("inc/footer.php") ?>