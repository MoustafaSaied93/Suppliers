

<?php include "inc/header.php";

include_once("config.php");

$id = $_GET['id'];

$result=mysqli_query($conn,"SELECT p.*, c.*, a.*
     FROM product p INNER JOIN
     accounts a
          ON p.UserID = a.UserID INNER JOIN
          categories c ON p.cat_id = c.cat_id

WHERE p.product_id='$id'");




$row = mysqli_fetch_array($result);

$productname=$row['Product_Name'];

$image1=$row['image1'];

$image2=$row['image2'];

$image3=$row['image3'];

$image4=$row['image4'];


$categoryid=$row['cat_id'];

$categoryName=$row['cat_name'];



$ProductDesc=$row['Descrip'];


$city=$row['City'];



?>






	<!-- Shop Single Content -->
	<section class="shop-single-content bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content style2">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">تفاصيل المنتج</li>
						</ol>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="single_product_grid row">
						<div class="single_product_slider col-lg-6">
							<div class="item">
								<div class="sps_content">
									<div class="thumb">
										<div class="single_product">
											<div class="single_item">
												<div class="thumb"><img class="img-fluid" src="images/shop/ss1.png" alt="ss1.png"></div>
											</div>
											<a class="product_popup popup-img" href="images/shop/ss1.png"><span class="flaticon-zoom-in"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="sps_content">
									<div class="thumb">
										<div class="single_product">
											<div class="single_item">
												<div class="thumb"><img class="img-fluid" src="images/shop/ss2.png" alt="ss2.png"></div>
											</div>
											<a class="product_popup popup-img" href="images/shop/ss2.png"><span class="flaticon-zoom-in"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="sps_content">
									<div class="thumb">
										<div class="single_product">
											<div class="single_item">
												<div class="thumb"><img class="img-fluid" src="images/shop/ss3.png" alt="ss3.png"></div>
											</div>
											<a class="product_popup popup-img" href="images/shop/ss3.png"><span class="flaticon-zoom-in"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="sps_content">
								<div class="content">
									<div class="shop_single_product_details">
										<h4 class="title">الاسم </h4>
										<div class="sspd_price mb25">١٠ الف ريال</div>
										<p class="mb20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet urna ac leo lacinia, posuere bibendum diam finibus. Suspendisse eu </p>
										<ul class="cart_btns ui_kit_button mb20">
											<li class="list-inline-item"><input placeholder="5" type="number"></li>
											<li class="list-inline-item"><button type="button" class="btn"><span class="flaticon-shopping-bag pr5 fz20"></span> اضافة الي السلة</button></li>
										</ul>
										<ul class="sspd_sku mb30">
											<li><a href="#">رقم القطعة : ٩٨٢٣٥٧٣٤</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop_single_tab_content mt30">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
							    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">الوصف</a>
							</li>

                         
							<li class="nav-item">
							    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">تقيمات العملاء</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
								<div class="product_single_content">
									<div class="mbp_pagination_comments">
										<div class="mbp_first media">
											<div class="media-body">
										    	<p class="mb25">Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.</p>
										    	<p class="mt10 mb0">Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
								<div class="product_single_content">
									<div class="mbp_pagination_comments">
										<ul class="total_reivew_view">
											<li class="list-inline-item sub_titles">896 Reviews</li>
											<li class="list-inline-item">
												<ul class="star_list">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</li>
											<li class="list-inline-item avrg_review">( 4.5 out of 5 )</li>
											<li class="list-inline-item write_review">Write a Review</li>
										</ul>
										<div class="mbp_first media">
											<img src="images/testimonial/1.png" class="mr-3" alt="1.png">
											<div class="media-body">
										    	<h4 class="sub_title mt-0">Diana Cooper
													<div class="sspd_review dif">
														<ul>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"></li>
														</ul>
													</div>
										    	</h4>
										    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
										    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
											</div>
										</div>
										<div class="custom_hr"></div>
										<div class="mbp_first media">
											<img src="images/testimonial/2.png" class="mr-3" alt="2.png">
											<div class="media-body">
										    	<h4 class="sub_title mt-0">Ali Tufan
													<div class="sspd_review dif">
														<ul>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"></li>
														</ul>
													</div>
										    	</h4>
										    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
										    	<p class="mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
											</div>
										</div>
										<div class="custom_hr"></div>
										<div class="mbp_comment_form style2">
											<h4>Write a Review</h4>
											<ul class="sspd_review">
												<li class="list-inline-item">
													<ul class="mb0">
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</li>
												<li class="list-inline-item review_rating_para">Your Rating & Review</li>
											</ul>
											<form class="comments_form">
												<div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="Review Title">
												</div>
												<div class="form-group">
												    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="Your Review"></textarea>
												</div>
												<button type="submit" class="btn btn-thm">Submit Review <span class="flaticon-right-arrow-1"></span></button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <br>

                    
					<div class="row mb30">
						<div class="col-lg-12" >
							<h4 class="main-title text-center mb40">ربما يعجبك ايضا</h4>
						</div>
						<div class="col-sm-4 col-lg-4">
							<div class="shop_grid">
								<div class="thumb">
									<img class="img-fluid w100" src="images/shop/1.png" alt="1.png">
									<div class="tag">Sale</div>
								</div>
								<div class="details">
									<h4 class="item-tile">Album <span class="price">$13,000</span></h4>
									<button class="btn btn-thm add_to_cart">Add to cart</button>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-lg-4">
							<div class="shop_grid">
								<div class="thumb">
									<img class="img-fluid w100" src="images/shop/2.png" alt="2.png">
								</div>
								<div class="details">
									<h4 class="item-tile">Beanie <span class="price">$13,000</span></h4>
									<button class="btn btn-thm add_to_cart">Add to cart</button>
								</div>
							</div>
						</div>


                        <div class="col-sm-4 col-lg-4">
							<div class="shop_grid">
								<div class="thumb">
									<img class="img-fluid w100" src="images/shop/2.png" alt="2.png">
								</div>
								<div class="details">
									<h4 class="item-tile">Beanie <span class="price">$13,000</span></h4>
									<button class="btn btn-thm add_to_cart">Add to cart</button>
								</div>
							</div>
						</div>


                   
					</div>
				</div>





				<div class="col-lg-4">
                <div class="terms_condition_widget">
						<h4 class="title">الاستفسار عن المنتج</h4>
						<div class="widget_list">
							<ul class="list_details">
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Clothing</a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Decor</a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Music</a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Uncategorized</a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>House</a></li>
							</ul>
						</div>
					</div>

                    

					<div class="terms_condition_widget" style="hieght:30%">
						<h4 class="title">مواصفات المنتج</h4>
						<div class="widget_list">
						
                            <ul class="sspd_sku mb30">
							<li><p >رقم القطعة : ٩٨٢٣٥٧٣٤</p></li>

                            <li><p>فترة الضمان :1 سنة </p></li>

                            <li><p> نوع القياس : انش</p></li>

                            <li><p>الطول : 100 </p></li>

                            <li><p> العرض : 20</p></li>

                            <li><p> الحجم : 30 </p></li>

                            <li><p> الارتفاع : 20 انش</p></li>

                            <li><p>الوزن :200 انش</p></li>

                            <li><p>قوة المحرك : 20 وات </p></li>


                            <li><p>الجهد الكهربى :30 وات </p></li>

                            <li><p>القطر : 20  </p></li>
                            <li><p> القطر الخارجى : 20  </p></li>

                            <li><p> مرفق المنتج :  </p></li>
                            
							</ul>
								
						
						</div>
					</div>
				
					</div>
				</div>

                
			</div>
		</div>
	</section>






<?php include "inc/footar.php" ?>