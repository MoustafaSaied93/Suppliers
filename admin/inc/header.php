

<?php
session_start();

if(!isset ($_SESSION ['id']))
{

    header("location:../index.php");

}




?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta -->
        <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
        <meta name="author" content="ParkerThemes">
        <link rel="shortcut icon" href="img\fav.png">

        <!-- Title -->
        <title>BrandM</title>


        <!-- *************
            ************ Common Css Files *************
        ************ -->
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="css\bootstrap.min.css">

        <!-- Icomoon Font Icons css -->
        <link rel="stylesheet" href="fonts\style.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css\main.css">
        <link rel="stylesheet" href="css\toastr.min.css">

        <!-- Data Tables -->
    	<link rel="stylesheet" href="vendor\datatables\dataTables.bs4.css">
    	<link rel="stylesheet" href="vendor\datatables\dataTables.bs4-custom.css">
    	<link href="vendor\datatables\buttons.bs.css" rel="stylesheet">

            	<!-- Datepicker css -->
		<link rel="stylesheet" href="vendor\datepicker\css\classic.css">
		<link rel="stylesheet" href="vendor\datepicker\css\classic.date.css">
        <!-- *************
            ************ Vendor Css Files *************
        ************ -->
        <!-- DateRange css -->
        <link rel="stylesheet" href="vendor\daterange\daterange.css">

        <!-- Chartist css -->
        <link rel="stylesheet" href="vendor\chartist\css\chartist.min.css">
        <link rel="stylesheet" href="vendor\chartist\css\chartist-custom.css">
        <link rel="stylesheet" href="vendor\datatables\dataTables.min.js">
      

        <style>
        .counter

    {
    position: absolute;
    top: 8px;
    width: 16px;
    height: 16px;
    line-height: 16px;
    font-size: .6rem;
    font-weight: 600;
    text-align: center;
    background: #cc2626;
    color: #ffffff;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
}

.field-icon {
  float: left;
  margin-left: 5px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
        
        
        
        </style>


    </head>
    <body>




        <!-- *************
            ************ Header section start *************
        ************* -->

        <!-- Header start -->
        <header class="header">
            <div class="logo-wrapper">
                <a href="index.html" class="logo">
                    <img src="img\logo.png" alt="Wafi Admin Dashboard">
                </a>
                
            </div>
            <div class="header-items">
                <!-- Custom search start -->
                <div class="custom-search">
                    <input type="text" class="search-query" placeholder="Search here ...">
                    <i class="icon-search1"></i>
                </div>
                <!-- Custom search end -->

                <!-- Header actions start -->
                <ul class="header-actions">
                    <li class="dropdown">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-box"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                            <div class="dropdown-menu-header">
                                Tasks (05)
                            </div>
                            <ul class="header-tasks">
                                <li>
                                    <p>#48 - Dashboard UI<span>90%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>#95 - Alignment Fix<span>60%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <p>#7 - Broken Button<span>40%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-bell"></i>
                            <span class="count-label">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                            <div class="dropdown-menu-header">

                            </div>

                        </div>
                    </li>

                    <?php
                     include("../config.php");

                 $UserID=$_SESSION['id'];

                 $UserData=mysqli_query($conn,"SELECT * 
                 FROM accounts where  UserID='$UserID'");

                 $users=mysqli_fetch_assoc($UserData);
                
                 $userName=$users['UserName'];

                 $password=$users['passwords'];

                 $Email=$users['Email'];

                 $UserPhoto=$users['UserPhoto'];


                 $firstCharacter = $userName[0];


                    ?>


                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <span class="user-name"><?php echo $userName   ?></span>
                            <span class="avatar"><?php echo $firstCharacter  ?><span class="status busy"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                            <div class="header-profile-actions">
                                <div class="header-user-profile">
                                    <?php
                                    if($UserPhoto!=null)
                                    {
                                        echo'
                                    <div class="header-user">
                                        <img src=" ../'.$UserPhoto.'" alt="Admin Template">
                                    </div>';
                                    }

                                    else
                                    {

                                        echo'
                                        <div class="header-user">
                                            <img src="../images/user/user-thumb.jpg" alt="Admin Template">
                                        </div>';


                                    }
                                    ?>
                                    <h5><?php echo $userName   ?></h5>

                                </div>
                                <a href="#"><i class="icon-user1"></i> البروفايل</a>
                                <a href="#" data-toggle="modal" data-target="#UserSetting" ><i class="icon-settings1"></i>اعدادات الحساب</a>
                
                                <a href="AdminLogout.php"><i class="icon-log-out1"></i> تسجيل خروج</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
                            <i class="icon-list"></i>
                        </a>
                    </li>
                </ul>
                <!-- Header actions end -->
            </div>
        </header>
        <!-- Header end -->

        <!-- Screen overlay start -->
        <div class="screen-overlay"></div>
        <!-- Screen overlay end -->

        <!-- Quicklinks box start -->
    
        <!-- Quicklinks box end -->

        <!-- Quick settings start -->
        <div class="quick-settings-box">
            <div class="quick-settings-header">
                <div class="date-container">Today <span class="date" id="today-date"></span></div>
                <a href="#" class="quick-settings-box-close">
                    <i class="icon-circle-with-cross"></i>
                </a>
            </div>
            <div class="quick-settings-body">
                <div class="fullHeight">
                    <div class="quick-setting-list">
                        <h6 class="title">Events</h6>
                        <ul class="list-items">
                            <li>
                                <div class="list-title">Product Launch</div>
                                <div class="list-location">10:00 AM</div>
                            </li>
                            <li>
                                <div class="list-title">Team Meeting</div>
                                <div class="list-location">01:30 PM</div>
                            </li>
                            <li>
                                <div class="list-title">Q&A Session</div>
                                <div class="list-location">02:30 PM</div>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-setting-list">
                        <h6 class="title">Notes</h6>
                        <ul class="list-items">
                            <li>
                                <div class="list-title">Refreshing the list</div>
                                <div class="list-location">03:15 PM</div>
                            </li>
                            <li>
                                <div class="list-title">Not able to click on button</div>
                                <div class="list-location">03:18 PM</div>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-setting-list">
                        <h6 class="title">Quick Settings</h6>
                        <ul class="set-priority-list">
                            <li>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" checked="" id="systemUpdates">
                                    <label class="custom-control-label" for="systemUpdates">System Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="noti">
                                    <label class="custom-control-label" for="noti">Notifications</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">


            <nav class="navbar navbar-expand-lg custom-navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar" aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="WafiAdminNavbar">
                    <ul class="navbar-nav">

                    <?php

                  if(isset($_SESSION['UserType']))
                  {

                    if($_SESSION['UserType']==1)
                    {
                        echo'

                        <li class="nav-item dropdown">
                        <a class="nav-link" href="Vendorindex.php" id="dashboardsDropdown" role="button">
                            <i class="icon-devices_other nav-icon"></i>
                           لوحة التحكم
                        </a>
                    </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="counter" id="counter2">0</span>
                            <i class="icon-image nav-icon"></i>
                            ادارة المنتجات
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">


                            <li>
                                <a class="dropdown-item" href="products.php">المنتجات</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pendingreauest.php">المنتجات المعلقة</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="Vendorrefusedrequest.php">المنتجات المرفوضة</a>
                            </li>
                        </ul>
                    </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link"  href="#" id="formsDropdown">
                                <i class="icon-edit1 nav-icon"></i>
                                الفواتير والمبيعات
                            </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-image nav-icon"></i>
                               تقترير المبيعات
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">


                                <li>
                                    <a class="dropdown-item" href="">التقارير اليومية</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">التقارير الشهرية</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">التقارير الثانوية</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                        <a class="nav-link" href="SystemMessages.php" id="tablesDropdown">
                        <span class="counter" id="counter1">0</span>
                            <i class="icon-message nav-icon"></i>
                           رسائل النظام
                        </a>                        

                    </li>


                    <li class="nav-item dropdown">
                    <a class="nav-link" href="../index.php" id="tablesDropdown">
                        <i class="icon-globe nav-icon"></i>
                       الموقع
                    </a>

                </li>

                        
                        
                        
                        ';


                    }

                    else if( $_SESSION['UserType']==3)

                    {

                        echo'
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="index.php" id="dashboardsDropdown" role="button">
                                <i class="icon-devices_other nav-icon"></i>
                               لوحة التحكم
                            </a>
                        </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="counter" id="counter3">0</span>
                                <i class="icon-shopping-cart nav-icon"></i>
                                ادارة الطلبات
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <li>
                                    <a class="dropdown-item" href="VendorRequest.php">طلبات البائعين</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="AcceptedRequest.php">الطلبات المقبولة</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="RefusedRequest.php">الطلبات المرفوضة</a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link"  href="#" id="formsDropdown">
                                <i class="icon-edit1 nav-icon"></i>
                                الفواتير والمبيعات
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="uiElementsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-image nav-icon"></i>
                               تقترير المبيعات
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">


                                <li>
                                    <a class="dropdown-item" href="">التقارير اليومية</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">التقارير الشهرية</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">التقارير الثانوية</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tablesDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-user nav-icon"></i>
                                ادارة الحسابات
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">


                                <li>
                                    <a class="dropdown-item" href="Accounts.php">حسابات العملاء</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="VendorAccount.php">حسابات البائعين  </a>
                                </li>
                               
                            </ul>

                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tablesDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-image nav-icon"></i>
                                ادارة صفحات الموقع
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="uiElementsDropdown">


                                <li>
                                    <a class="dropdown-item" href="SliderImage.php">الصفحة الرئيسية</a>
                                </li>

                                <li>
                                <a class="dropdown-item" href="ContactUs.php">صفحة اتصل بنا</a>
                            </li>
                               
                               
                            </ul>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="ClientMessages.php" id="tablesDropdown">
                            <span class="counter" id="counter">0</span>
                                <i class="icon-message nav-icon"></i>
                               رسائل العملاء
                            </a>                           

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="../index.php" id="tablesDropdown">
                                <i class="icon-globe nav-icon"></i>
                               الموقع
                            </a>

                        </li>';




                    }

                }

                    else
                    { 
                        header("location:../index.php");   
                       
                    }
                        ?>

                    </ul>
                </div>
            </nav>

            			<div class="main-container">
                    <!-- Page header start -->
                    <div class="page-header">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">Layouts</li>
                        <li class="breadcrumb-item active">Default Layout</li>
                      </ol>

                      <ul class="app-actions">
                        <li>
                          <a href="#" id="reportrange">
                            <span class="range-text"></span>
                            <i class="icon-chevron-down"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Print">
                            <i class="icon-print"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download CSV">
                            <i class="icon-cloud_download"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
	              	<div class="content-wrapper">



                      <!-- UserSetting modal --> 
                   <div class="modal fade" id="UserSetting">
                   <div class="modal-dialog">

                   <div class="modal-content">
          
                   <div class="modal-header">

                <h3>اعدادات الحساب </h3>
                  </div>
                <div class="modal-body" style="padding-left:220px">

                <input type="hidden" id="UserID" value=<?php echo $UserID  ?>  >


                 <div class="form-group">
                 <label><h6>اسم المستخدم</h6></label>                                                    
               <input type="text"  class = "form-control" value=<?php echo $userName  ?>  id="UserName"  placeholder="ادخل اسم المستخدم">
                                                               
                  </div>
                 
                 

                 <div class="form-group">
                 <label><h6>البريد الالكتروني</h6></label>                                                    
         <input type="email" class = "form-control"  value=<?php echo $Email  ?>  id="Email"  placeholder="ادخل البريد الالكتروني">
                                                               
          </div>
          

          <div class="form-group">
          <label><h6>كلمة المرور</h6></label>                                                    
         <input type="password" class = "form-control" value=<?php echo $password  ?>   id="passwords"  placeholder="ادخل كلمة المرور" >
         <span toggle="#password-field" id="togglePassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>                                                       
          </div>

               
            </div>
            <div class="modal-footer" style="padding-left:220px">

                <a href="#" class="btn btn-success" id="UpdateProfile">تخديث</a>
                <a href="#" class="btn btn-danger" data-dismiss="modal" id="r">الغاء</a>
            </div>
        </div>
    </div>
</div>
                      
