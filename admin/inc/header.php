<?php 



 include_once("../service/config.php");


 session_start();

if(!isset ($_SESSION ['id']))
{

    header("location: adminlogin.php");

}


?>






<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>almacenter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        
        <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <link href="assets/css/toastr.min.css" rel="stylesheet" type="text/css">

        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app-rtl.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/dtable.css" rel="stylesheet" type="text/css">

        <link href="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


        <style>

.red{

    color:red;
}

       </style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                             

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">admin</span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            

                          

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target=".UserSetting">
                                <i class="mdi mdi-settings-outline"></i>
                                <span>الاعدادات</span>
                            </a>

                         

                           

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="adminlogout.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>تسجيل الخروج</span>
                            </a>

                        </div>
                    </li>

                

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="../img/logo.png"  height="30px" width="100px" alt>
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="../img/logo.png"  height="30px" width="100px" alt>
                        </span>
                    </a>

                    <a href="index.php" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="../img/logo.svg" alt="" height="40px" width="180px">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="../img/logo.svg" alt="" height="40px" width="180px">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="البحث...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>


                    <li class="d-none d-sm-block">
                    <a class="nav-link" href="../index.php" id="tablesDropdown">
                                <i class="icon-globe nav-icon"></i>
                               الموقع
                            </a>
                    </li>

                  
                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                        <li>
                             
                               
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                <i class="fas fa-user"></i>
                                    <span>ادارة الصالة </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li><a href="players.php">المشتركين</a></li>

                                    <li><a href="membersubscriptions.php">اشتراكات الاعضاء</a></li>

                                    <li><a href="technqalteam.php">المدربين</a></li>

                                    <li><a href="#">حجوزات الكلاسات</a></li>
                                    <li><a href="#">    سجلات الحضور والانصراف</a></li>
                                    <li><a href="payment.php"> ادارة المدفوعات</a></li>

                                    <li><a href="invoicedetails.php"> ادارة الفواتير</a></li>

                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class=" icon-globe nav-icon"></i>
                                    <span> ادارة الموقع </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li><a href="#">الاسليدر</a></li>
                                    <li><a href="classes.php"> فصول التدريب</a></li>
                                    <li><a href="#"> جدول  مواعيد التمارين </a></li>
                                    <li><a href="#" data-toggle="modal" data-target=".editsetting"> اعدادات عامة </a></li>

                                                                
                                </ul>
                            </li>


                            

                                          

                          
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <?php

            $querysett=mysqli_query($conn,"SELECT * FROM  general_settings where setting_id=2");

            $querysett2=mysqli_query($conn,"SELECT * FROM  users where userid=1");


            $data=mysqli_fetch_assoc($querysett);

            $data2=mysqli_fetch_assoc($querysett2);

            ?>



    <!-- edit popup -->

    <div class="body">
        <!-- larg modal -->
        <div class="modal fade editsetting" tabindex="-1" role="dialog" aria-labelledby="orders_"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="orders_"> الاعدادات العامة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>

                        <div class="form-group">
                                <label for="o1">اسم الشركة</label>
                                <input type="text" class="form-control" id="company_name" value="<?php echo $data['company_name'] ?>"
                                    maxlength=50 >
                            </div>


                            <div class="form-group">
                                <label for="o1">البريد الالكترونى</label>
                                <input type="text" class="form-control" id="email" value="<?php echo $data['email'] ?>"
                                    maxlength=50 >
                            </div>


                            <div class="form-group">
                                <label for="o1">رقم الجوال</label>
                                <input type="text" class="form-control" id="phone_number"value="<?php echo $data['phone_number'] ?>"
                                    maxlength=30 >
                            </div>


                            <div class="form-group">
                                <label for="o1">اسم المدينة او العنوان </label>
                                <input type="text" class="form-control" id="city" value="<?php echo $data['city'] ?>"
                                    maxlength=50 >
                            </div>


                            <div class="form-group">
                                <label for="o1">الرقم الضريبى </label>
                                <input type="text" class="form-control" id="vat_number" value="<?php echo $data['vat_number'] ?>"
                                    maxlength=30 >
                            </div>
                      

                            <div class="form-group">
                                <label for="o1">سعر الاشتراك الشهرى </label>
                                <input type="text" class="form-control" id="subprice"value="<?php echo $data['price'] ?>"
                                    maxlength=10>
                            </div>

                            <div class="form-group">
                                <label for="o1">الضريبة المضافة</label>
                                <input type="text" class="form-control" id="tax"value="<?php echo $data['tax'] ?>"
                                    maxlength=10>
                            </div>


                            <button type="submit" class="btn btn-success mb-2" id="editsetting"><i
                                    class="fa fa-plus-square"></i> <span>تعديل</span></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>



         <!-- edit popup -->

    <div class="body">
        <!-- larg modal -->
        <div class="modal fade UserSetting" tabindex="-1" role="dialog" aria-labelledby="orders_"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="orders_"> اعدادات الحساب</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>

                        <div class="form-group">
                                <label for="o1">اسم المستخدم</label>
                                <input type="text" class="form-control" id="UserName" value="<?php echo $data2['UserName'] ?>"
                                    maxlength=50 >
                            </div>


                            <div class="form-group">
                                <label for="o1">كلمة المرور </label>
                                <input type="password" class="form-control" id="Password" value="<?php echo $data2['Password'] ?>"
                                    maxlength=50 >
                            </div>


                           

                            <button type="submit" class="btn btn-success mb-2" id="editusersetting"><i
                                    class="fa fa-plus-square"></i> <span>تعديل</span></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>


         

