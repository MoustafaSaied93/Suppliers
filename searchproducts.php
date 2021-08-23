<?php include "inc/header.php";

include_once("config.php");




?>

	<!-- 4th Home Slider -->
	<div class="home-four" dir="ltr">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-banner-wrapper">
					    <div class="banner-style-one owl-theme owl-carousel">
					        <div class="slide slide-one" style="background-image: url(images/home/1.jpg);height: 800px;"></div>
					        <div class="slide slide-one" style="background-image: url(images/home/2.jpg);height: 800px;"></div>
					        <div class="slide slide-one" style="background-image: url(images/home/3.jpg);height: 800px;"></div>
					    </div>
					    <div class="carousel-btn-block banner-carousel-btn">
					        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>
					        <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
					    </div><!-- /.carousel-btn-block banner-carousel-btn -->
					</div><!-- /.main-banner-wrapper -->
				</div>
			</div>
		</div>
		<div class="container home_iconbox_container">
			<div class="row posr">

				<div class="col-lg-12">
					<div class="home_content home4">
						<div class="home-text text-center">
							<h2 class="fz55">ابحث عن منتجاتك</h2>
							<p class="fz18 color-white"> هل تبحث عن منتج لمنتج معين أو صنف من المنتجات؟ </p>
						</div>
						<div class="home_adv_srch_opt home4">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">البحث   </a>
								</li>
								<li class="nav-item">
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search home4">
										<ul class="h1ads_1st_list mb0">
										<form action="searchproducts.php" method="GET">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" name="Searchproduct" placeholder="ابحث عن منتجك هنا"value="  <?php if(isset($_GET['Searchproduct'])){ echo htmlspecialchars($_GET['Searchproduct']);} ?>" >
											    </div>
											</li>

											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>المنطقة</option>
															<option>المنطقة الوسطي</option>
															<option>المنطقة الشرقية </option>
															<option>المنطقة الغربية </option>
															<option>المنطقة الشمالية</option>
															<option>المنطقة الجنوبية</option>
																									
														</select>
													</div>
												</div>
											</li>
											
											<li class="list-inline-item">
												<div class="small_dropdown2 home4">
												   


												  	<div class="dd_content2">
													    <div class="pricing_acontent">
													    	<span id="slider-range-value1"></span>
															<span id="slider-range-value2"></span>
														    <div id="slider"></div>
															<!-- <input type="text" class="amount" placeholder="$52,239"> 
															<input type="text" class="amount2" placeholder="$985,14">
															<div class="slider-range"></div> -->
													    </div>
												  	</div>
												</div>
											</li>
																				
										
                                            <li class="list-inline-item">
												
												<div class="search_option_button">
												    <button type="submit" name ="search" value="" class="btn btn-thm3">بحث</button>
												</div>
                                             
											</li>
                                        </form>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h4 class="text-center color-white fw600 mb25 mb0-520">عما تبحث؟</h4>
					<ul class="home4_iconbox mb0">
						<li class="list-inline-item"><div class="icon"><span class="flaticon-house"></span><p>قطع الغيار</p></div></li>
						<li class="list-inline-item"><div class="icon"><span class="flaticon-house-1"></span><p> الكهربية</p></div></li>
						<li class="list-inline-item"><div class="icon"><span class="flaticon-house-2"></span><p> الصيانة</p></div></li>
						<li class="list-inline-item"><div class="icon"><span class="flaticon-building"></span><p>التركيب</p></div></li>
						<li class="list-inline-item"><div class="icon"><span class="flaticon-building"></span><p>التركيب</p></div></li>
						
						
					
					</ul>
				</div>
			</div>
		</div>
	</div>




	<!-- Feature Properties -->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
				    	<div class="mouse_scroll">
			        		<div class="icon">
					    		<h4>حرك الفأرة لأسفل</h4>
					    		<p>لاكتشاف المزيد</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="images/resource/mouse.png" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container ovh"§>

		
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>نتائج البحث</h2>
						
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
					<?php


               if(isset ($_GET['search']))
                {

    
   
                $SEARCHVAL=trim ($_GET['Searchproduct']);


                $query= mysqli_query($conn,"SELECT p.*, c.*,a.*
                FROM product p INNER JOIN
                     categories c
                     ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.Product_Name LIKE '%".$SEARCHVAL."%' AND p.Accept='1'");

                if(mysqli_num_rows($query) >= 1)
                {




                while($row = mysqli_fetch_array($query))
                      {
                      echo'


						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="images/products/'.$row['image1'].'">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">للبيع</a></li>
											<li class="list-inline-item"><a href="#">متوفر</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">'.$row['Price'].'<small> ريال</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">'.$row['cat_name'].'</p>
										<h4>'.$row['Product_Name'].'</h4>
										<p><span class="flaticon-placeholder"></span> السعودية-'.$row['City'].'</p>
										<ul class="prop_details mb0"style="text-align: right;">
										
											<li class="list-inline-item" ><a href="#">رقم القطعة: '.$row['PartNumber'].' </a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#"> شركة تجارية</a></li>
										</ul>
										<div class="fp_pdate float-right"> منذ:ساعة</div>
									</div>
								</div>
							</div>
						</div>

						 ';

	                     }

                        }

                        else
                        {


                            echo'<h3 style="text-align:center"> عفوا لا توجد نتائج لعرضها</h3>';
                        }


                    }

						 ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	
<br> <br><br> <br>




<?php include "inc/footar.php" ?>