
<?php
session_start();

if(isset($_SESSION ['id']))
{

	if($_SESSION['UserType']==1)

	{

	$link='	<li class="list-inline-item list_s float-left">
					<a href="Logout.php" class="btn flaticon-log-out"> <span class="dn-lg">تسجيل الخروج</span></a>

	              </li>
					
	 <li class="list-inline-item add_listing home2 style10 float-left"><a href="admin/Vendorindex.php"><span class=""></span><span class="dn-lg"> المتجر </span></a></li>
	<li class="list-inline-item list_s float-left">
	<a href="#" class="btn flaticon-user""> <span class="dn-lg">مرحبا '.$_SESSION['UserName'].'</span></a>
					
	</li>';

	}


	else if($_SESSION['UserType']==2)
	{

		$link='	<li class="list-inline-item list_s float-left">
					<a href="Logout.php" class="btn flaticon-log-out"> <span class="dn-lg">تسجيل الخروج</span></a>

	              </li>
					
	                
	         <li class="list-inline-item list_s float-left">
			<a href="#" class="btn flaticon-user""> <span class="dn-lg">مرحبا '.$_SESSION['UserName'].'</span></a>
					
	             </li>';



	}


	else if($_SESSION['UserType']==3)

	{

		$link='	<li class="list-inline-item list_s float-left">
					<a href="admin/AdminLogout.php" class="btn flaticon-log-out"> <span class="dn-lg">تسجيل الخروج</span></a>

	              </li>
					
	                <li class="list-inline-item add_listing home2 style10 float-left"><a href="admin/index.php"><span class=""></span><span class="dn-lg"> لوحة التحكم </span></a></li>
	                <li class="list-inline-item list_s float-left">
	                	<a href="#" class="btn flaticon-user""> <span class="dn-lg">مرحبا '.$_SESSION['UserName'].'</span></a>
					
	             </li>';




	}




		}


		else
		{
	
			$link='	<li class="list-inline-item list_s float-left">
						
	
					  </li>
						
						<li class="list-inline-item add_listing home2 style10 float-left"><a href="registervendor.php" target="_blank"><span class="flaticon-tick"></span><span class="dn-lg"> بوابة الموردين </span></a></li>
						<li class="list-inline-item list_s float-left">
							<a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">تسجيل الدخول</span></a>
						
					 </li>';
	
	
	
				}
	



?>











<!DOCTYPE html>

<html dir="rtl" lang="en">
<head>


<!-- Basic Page Needs--> 
<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="keywords" content="منصة تجار الرقمية,تجار,منصة الجبيل,قطع غيار,صيانة تجار,قطع الغيار الجبيل تجار,تجار تجار قطع الغيار  بالرياض,موردين قطع الغيار  ,تجار للبيع في حي النخيل بالرياض,تجار تجار بالرياض,قطع الغيار تجار بالرياض,قطع منصة تجار لقطع الغيار,تجار لقطع الغيار بالجبيل,تجار للبيع بالرياض,تجار قطع غير في الرياض,مضخات قطع غيار في الجبيل, منصة تجار منصة تجار الرقمية منصة تجار الرقمية منصة تجار الرقمية, منصة تجار الرقمية, سكنية بالرياض, منصة تجار الرقمية الرياض"> 
	<meta name="author" content=" منصة تجار الرقمية منصة تجار الرقمية, منصة تجار الرقمية, منصة تجار الرقمية منصة تجار الرقمية منصة تجار الرقمية, منصة تجار الرقمية, منصة تجار الرقمية, منصة تجار منصة تجار الرقمية منصة تجار الرقمية, منصة تجار الرقمية, منصة تجار الرقمية "> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="CreativeLayers" content="ATFN"> 
	<!-- Primary Meta Tags -->

<!-- css file --> 
<link rel="stylesheet" href="css/bootstrap-rtl.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/toastr.min.css">

<!-- Title -->
<title>منصة تجار</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 home10 navbar-scrolltofixed stricky main-menu">
		<div class="container p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle" dir="RTL">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-right dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <span>تجار</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-left" data-menu-style="horizontal">
		            <li>
		                <a href="index.php"><span class="title">الرئيسية</span></a>
		                <!-- Level Two-->
		        
		            </li>
					<li>
		                <a href="about.php"><span class="title">عن تجار</span></a>
		                <!-- Level Two-->
		        
		            </li>
		            <li>
		                <a href="proudect.php"><span class="title">المنتجات</span></a>
		               
	                	<ul>
		                    <li><a href="shop.php?id=<?php echo 1 ?>">المعدات الصناعية</a> </li>		                       	                       
		                    <li> <a href="shop.php?id=<?php echo 2 ?>">الادوات الصناعية</a>  </li>
							<li> <a href="shop.php?id=<?php echo 3 ?>">قطع الغيار</a>  </li>
							<li> <a href="shop.php?id=<?php echo 4 ?>">مشتقات الزيوت والشحوم</a>  </li>
							<li> <a href="shop.php?id=<?php echo 5 ?>">معدات وادوات السلامة</a>  </li>
							<li> <a href="shop.php?id=<?php echo 7 ?>">معدات ونظم الاغلاق الهوائية </a>  </li>
							<li> <a href="shop.php?id=<?php echo 6 ?>">معدات وادوات كهربائية</a>  </li>
							<li> <a href="shop.php?id=<?php echo 8 ?>">معدات وادوات نظم التحليل الصناعية</a>  </li>   
		                    		                   		                      
							  		                                                   
	                	</ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">الخدمات</span></a>
		
		                    </li>
                  
		            
		           
					<li>
		                <a href="policies.php"><span class="title">السياسات</span></a>
		            
		            </li>
		            <li class="last">
		                <a href="contact.php"><span class="title">اتصل بنا</span></a>
		            </li>
					
					
	               <?php echo $link  ?>
					
		        </ul>
		    </nav>
		</div>
	</header>
	<!-- Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">تسجيل الدخول</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">تسجيل عضوية</a>
							  	</li>
							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form action="#">
										<div class="heading">
											<h4  >تسجيل الدخول</h4>
										</div>
										<div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> تسجيل الدخول بواسطة الفيس بوك</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> تسجيل الدخول بواسطة جوجل</button>
											</div>
										</div>
										<hr>
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" id="Email" placeholder="البريد الالكترونى">
										    <div class="input-group-prepend">
										    <!--	<div class="input-group-text"><i class="flaticon-user"></i></div> -->
										    </div>
										</div>
										<div class="input-group form-group">
									    	<input type="password" class="form-control" id="passwords" placeholder="كلمة المرور">
										    <div class="input-group-prepend">
										    <!--	<div class="input-group-text"><i class="flaticon-password"></i></div> -->
										    </div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">تذكرني</label>
											<a class="btn-fpswd float-right" href="#">هل نسيت كلمة المرور</a>
										</div>
										<button type="submit" id="Signin" class="btn btn-log btn-block btn-thm">تسجيل الدخول </button>

									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="images/resource/login.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>  تسجيل حساب جديد</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> تسجيل الدخول بواسطة الفيس بوك</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> تسجيل الدخول بواسطة جوجل</button>
											</div>
										</div>
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="UserName" placeholder="اسم المستخدم">
										    <div class="input-group-prepend">
										     <!--	<div class="input-group-text"><i class="flaticon-user"></i></div> -->
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="Emails" placeholder="البريد الالكترونى">
										    <div class="input-group-prepend">
										     <!--	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div> -->
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="passwordss" placeholder="كلمة المرور">
										    <div class="input-group-prepend">
										    <!--	<div class="input-group-text"><i class="flaticon-password"></i></div> -->
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="number" class="form-control" id="Mobile" placeholder="رقم الهاتف">
										    
										</div>

										<div class="form-group input-group">
										    <input type="text" class="form-control" id="Address" placeholder="العنوان">

				
										    
										</div>
										
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">هل انت موافق على شروط وسياسة الخصوصية ؟</label>
										</div>
										<button type="submit" id="Signout" class="btn btn-log btn-block btn-thm">انشاء الحساب</button>
										
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>










	
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">تجار</span>
				</div>

				<?php

				if (isset($_SESSION['UserType']))
				{
				
				if($_SESSION['UserType']==1 || $_SESSION['UserType']==2)

				{
					echo'

				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="#"><span class=""></span> '.$_SESSION['UserName'].'</a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
					
				</ul>';
				}

				else
				{

					echo'

				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
					
				</ul>';


				}
			}

			else
			{

				echo'

				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
					
				</ul>';


			}

				?>

			
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>

			<?php
			if (isset($_SESSION['UserType']))
			{
				if($_SESSION['UserType']==1)

				{
					echo'
				
			
			          <li>
		                <a href="index.php"><span class="title">الرئيسية</span></a>
		                <!-- Level Two-->
		        
		               </li>

					<li>
		                <a href="about.php"><span class="title">عن تجار</span></a>
		                <!-- Level Two-->
		        
		            </li>
					<li>
		                <a href="proudect.php"><span class="title">المنتجات</span></a>
		               
	                	<ul>
		                    <li><a href="shop.php?id=1">المعدات الصناعية</a> </li>		                       	                       
		                    <li> <a href="shop.php?id=2">الادوات الصناعية</a>  </li>
							<li> <a href="shop.php?id=3">قطع الغيار</a>  </li>
							<li> <a href="shop.php?id=4">مشتقات الزيوت والشحوم</a>  </li>
							<li> <a href="shop.php?id=5">معدات وادوات السلامة</a>  </li>
							<li> <a href="shop.php?id=7">معدات ونظم الاغلاق الهوائية </a>  </li>
							<li> <a href="shop.php?id=6">معدات وادوات كهربائية</a>  </li>
							<li> <a href="shop.php?id=8">معدات وادوات نظم التحليل الصناعية</a>  </li>   
		                    		                   		                      
							  		                                                   
	                	</ul>
		            </li>
					<li>
		                <a href="#"><span class="title">الخدمات</span></a>
		
		                    </li>
                  
		            
		           
					<li>
		                <a href="policies.php"><span class="title">السياسات</span></a>
		            
		            </li>
		            <li class="last">
		                <a href="contact.php"><span class="title">اتصل بنا</span></a>
		            </li>
					
					<li>
		                <a href="admin/Vendorindex.php"><span class="title">المتجر</span></a>
		            
		            </li>
			
				<li>
		                <a href="Logout.php"><span class="title">تسجيل الخروح</span></a>
		            
		            </li>
				
			</ul>';
				}

				else if($_SESSION['UserType']==2)
				{
					echo'


					<li>
					<a href="index.php"><span class="title">الرئيسية</span></a>
					<!-- Level Two-->
			
				   </li>

				<li>
					<a href="about.php"><span class="title">عن تجار</span></a>
					<!-- Level Two-->
			
				</li>
				<li>
					<a href="proudect.php"><span class="title">المنتجات</span></a>
				   
					<ul>
					<li><a href="shop.php?id=1">المعدات الصناعية</a> </li>		                       	                       
					<li> <a href="shop.php?id=2">الادوات الصناعية</a>  </li>
					<li> <a href="shop.php?id=3">قطع الغيار</a>  </li>
					<li> <a href="shop.php?id=4">مشتقات الزيوت والشحوم</a>  </li>
					<li> <a href="shop.php?id=5">معدات وادوات السلامة</a>  </li>
					<li> <a href="shop.php?id=7">معدات ونظم الاغلاق الهوائية </a>  </li>
					<li> <a href="shop.php?id=6">معدات وادوات كهربائية</a>  </li>
					<li> <a href="shop.php?id=8">معدات وادوات نظم التحليل الصناعية</a>  </li>   
																			 
																				 
				</ul>
				</li>
				<li>
					<a href="#"><span class="title">الخدمات</span></a>
	
						</li>
			  
				
			   
				<li>
					<a href="policies.php"><span class="title">السياسات</span></a>
				
				</li>
				<li class="last">
					<a href="contact.php"><span class="title">اتصل بنا</span></a>
				</li>		
		
			<li>
					<a href="Logout.php"><span class="title">تسجيل خروج</span></a>
				
				</li>
			
		</ul>';



				}

			}

				else
				{ 
					echo'

					<li>
					<a href="index.php"><span class="title">الرئيسية</span></a>
					<!-- Level Two-->
			
				   </li>

				<li>
					<a href="about.php"><span class="title">عن تجار</span></a>
					<!-- Level Two-->
			
				</li>
				<li>
					<a href="proudect.php"><span class="title">المنتجات</span></a>
				   
					<ul>
					<li><a href="shop.php?id=1">المعدات الصناعية</a> </li>		                       	                       
					<li> <a href="shop.php?id=2">الادوات الصناعية</a>  </li>
					<li> <a href="shop.php?id=3">قطع الغيار</a>  </li>
					<li> <a href="shop.php?id=4">مشتقات الزيوت والشحوم</a>  </li>
					<li> <a href="shop.php?id=5">معدات وادوات السلامة</a>  </li>
					<li> <a href="shop.php?id=7">معدات ونظم الاغلاق الهوائية </a>  </li>
					<li> <a href="shop.php?id=6">معدات وادوات كهربائية</a>  </li>
					<li> <a href="shop.php?id=8">معدات وادوات نظم التحليل الصناعية</a>  </li>   
																			 
																				 
				</ul>
				</li>
				<li>
					<a href="#"><span class="title">الخدمات</span></a>
	
						</li>
			  
				
			   
				<li>
					<a href="policies.php"><span class="title">السياسات</span></a>
				
				</li>
				<li class="last">
					<a href="contact.php"><span class="title">اتصل بنا</span></a>
				</li>		
		
			<li>
					<a href="registervendor.php" target="_blank"><span class="title">بوابة الموردين</span></a>
				
				</li>
			
		</ul>';
				}
				?>
		</nav>
	</div>