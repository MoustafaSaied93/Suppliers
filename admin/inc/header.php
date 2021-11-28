<?php 


 include_once("../service/config.php");



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
                            <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#UserSetting">
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
                            <img src="assets/images/logo.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>

                    <a href="index.html" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="assets/images/logo-sm-light.png" alt="" height="24">
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
                                <i class="fas fa-football-ball"></i>
                                    <span>ادارة الصالة </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li><a href="players.php">اشتراكات الاعضاء</a></li>
                                    <li><a href="technqalteam.php">حجوزات الكلاسات</a></li>
                                    <li><a href="technqalteam.php"> الحسابات</a></li>
                                    <li><a href="technqalteam.php"> ادارة المدفوعات</a></li>
                                    <li><a href="technqalteam.php"> ادارة الفواتير</a></li>

                                                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class=" fa fa-trophy"></i>
                                    <span> ادارة الموقع </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li><a href="teams.php">الاسليدر</a></li>
                                                                
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


         