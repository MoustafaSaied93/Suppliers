<?php include "inc/header.php";

include_once("config.php");

$query1= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID WHERE p.cat_id!='9'  AND p.Accept='1'
ORDER BY p.product_id  DESC LIMIT 8");



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
											    	<input type="text" class="form-control" require="require"  name="Searchproduct" value=""
													placeholder="ابحث عن منتجك هنا."
													>
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
						<h2>تحقق من احدث العروض</h2>
						<p> هل تبحث عن منتج لمنتج معين أو لصنف من المنتجات؟ </p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
					<?php

                while($row = mysqli_fetch_array($query1))
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
										<a class="fp_price" href="product-detail.php?id='.$row['product_id'].'">'.$row['Price'].'<small> ريال</small></a>
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

						 ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	



	<!-- Our Testimonials -->
	<section class="our-testimonials bgc-f7">
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>مراجعات العملاء</h2>
						<p>يسعدنا قراءة مراجعات الموردين والعملاء</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="testimonial_slider_home9">
						<div class="item">
							<div class="testimonial_post">
								<div class="details">
									<div class="icon text-thm"><span class="fa fa-quote-left"></span></div>
									<p style = "text-align: right;">العمل في منصة تجار مربح  التعامل مرن خدمة عملاء محترمة خدمات مجانية عمل فوق المحترم</p>
								</div>
								<div class="thumb">
									<img src="images/testimonial/1.jpg" alt="1.jpg">
									<h4 class="title">راضي الشمري <br><small class="text-thm">مورد</small></h4>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial_post">
								<div class="details">
									<div class="icon text-thm"><span class="fa fa-quote-left"></span></div>
									<p style = "text-align: right;">العمل في منصة تجار مربح  التعامل مرن خدمة عملاء محترمة خدمات مجانية عمل فوق المحترم</p>
								</div>
								<div class="thumb">
									<img src="images/testimonial/2.jpg" alt="2.jpg">
									<h4 class="title">محمد غريب <br><small class="text-thm">عضو جديد</small></h4>
								</div>
							</div>
						</div>
						
						
					
					
					
					
					
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Our Partners -->
<section id="our-partners" class="our-partners pt30">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h2>الشركاء</h2>
					<p>كن شريكًا مع منصة تجار لتكون مرنًا وملائمًا ومربحًا. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="images/partners/3.png" alt="1.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="images/partners/3.png" alt="2.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="images/partners/3.png" alt="3.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="images/partners/3.png" alt="4.png">
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg">
				<div class="our_partner">
					<img class="img-fluid" src="images/partners/3.png" alt="5.png">
				</div>
			</div>
		</div>
	</div>
</section>




<?php include "inc/footar.php" ?>