<?php include "inc/header.php";

include_once("config.php");


$query1= mysqli_query($conn,"SELECT * from product  where cat_id='8' AND Accept='1'
	");


$count1 = mysqli_num_rows($query1);


$query2= mysqli_query($conn,"SELECT * from product  where cat_id='10' AND Accept='1'
	");


$count2 = mysqli_num_rows($query2);


$query3= mysqli_query($conn,"SELECT * from product  where cat_id='11' AND Accept='1'
	");


$count3 = mysqli_num_rows($query3);


$query4= mysqli_query($conn,"SELECT * from product  where cat_id='12' AND Accept='1'
	");


$count4 = mysqli_num_rows($query4);


$query5= mysqli_query($conn,"SELECT * from product  where cat_id='13' AND Accept='1'
	");


$count5 = mysqli_num_rows($query5);


$query6= mysqli_query($conn,"SELECT * from product  where cat_id='15' AND Accept='1'
	");


$count6 = mysqli_num_rows($query6);


$query7= mysqli_query($conn,"SELECT * from product  where cat_id='14' AND Accept='1'
	");


$count7 = mysqli_num_rows($query7);


$query8= mysqli_query($conn,"SELECT * from product  where cat_id='16' AND Accept='1'
	");


$count8 = mysqli_num_rows($query8);








?>



<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
						    <li class="breadcrumb-item active" aria-current="page">الاقسام </li>
						</ol>
						<h4 class="breadcrumb_title">قائمة الاقسام</h4>
					</div>
				</div>
			</div>
		</div>
	</section>






	<!-- Listing Grid View -->
	<section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-991">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25"> بحث متقدم <a class="filter_closed_btn float-right" href="#"><small>اخفاء</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="كلمات البحث">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>

										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>الاقسام</option>
										
							
													</select>
												</div>
											</div>
										</li>
										
						
										
										
									
									
								
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">بحث</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb_content style2 mb0-991">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">اقسام المنتجات</li>
						</ol>
						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="listing_list_style mb20-xsd tal-991"style = "  text-align: left; ">
						<ul class="mb0">
							<li class="list-inline-item"><a href="#"><span class="fa fa-th-large"></span></a></li>
							<li class="list-inline-item"><a href="#"><span class="fa fa-th-list"></span></a></li>
						</ul>
					</div>
					<div class="dn db-991 mt30 mb0">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn style2"> الفلتر</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="sidebar_listing_grid1 dn-991">
						<div class="sidebar_listing_list">
							<div class="sidebar_advanced_search_widget">
								<ul class="sasw_list mb0">
									<li class="search_area">
									    <div class="form-group">
									    	<input type="text" class="form-control" id="exampleInputName1" placeholder="كلمات البحث">
									    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
									    </div>
								
									</li>
								
									
									<li>
										<div class="search_option_two">
											<div class="candidate_revew_select">
												<select class="selectpicker w100 show-tick" id="dropsearch">
													<option value="0" >الاقسام</option>
													<option value="1">المعدات الصناعية</option>
													<option value="2">الادوات الصناعية</option>
													<option value="3">قطع الغيار</option>
													<option value="4">مشتقات الزيوت والشحوم </option>
													<option value="5">معدات وادوات السلامة</option>
													<option value="6">معدات ونظم الاغلاق </option>
													<option value="7">معدات وادوات كهربائية </option>

													<option value="8">معدات وادوات نظم التحليل </option>
												
												</select>
											</div>
										</div>
									</li>
								
									<li>
										<div class="search_option_button">
										    <button type="submit" id="searchdep" class="btn btn-block btn-thm">بحث</button>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="terms_condition_widget">
							<h4 class="title">اقسام المنتجات</h4>
							<div class="sidebar_feature_property_slider">
								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">المعدات الصناعية</h4>
											</div>
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
											
												<h4 class="posr color-white">الادوات الصناعية</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">قطع الغيار</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">مشتقات الزيوت والشحوم</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">معدات وادوات السلامة</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">معدات ونظم الاغلاق الهوائية</h4>
											</div>
										</div>
									</div>
								</div>


								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">معدات وادوات كهربائية</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="feat_property home7">
										<div class="thumb">
											<img class="img-whp" src="images/property/fp1.jpg" alt="fp1.jpg">
											<div class="thmb_cntnt">
												<ul class="tag mb0">
													<li class="list-inline-item"><a href="#">متوفر</a></li>
													<li class="list-inline-item"><a href="#">للبيع</a></li>
												</ul>
												
												<h4 class="posr color-white">معدات وادوات نظم التحليل</h4>
											</div>
										</div>
									</div>
								</div>
					
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-12 col-lg-8">
					<div class="row">
						<div class="grid_list_search_result" stlye = "  text-align: right;">
							<div class="col-sm-12 col-md-4 col-lg-4 col-xl-5" >
								<div class="left_area tac-xsd">
									<p>عدد الاقسام :  8</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
								<div class="right_area text-right tac-xsd">
									<ul>
										
									
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
       
						<div class="col-lg-12" id="industrial-equipment">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 1 ?>"> القسم :المعدات الصناعية</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>

										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count1 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="industrial-tool">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 2 ?>"> القسم :الادوات الصناعية</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count2 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="sparepart">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 3 ?>"> القسم :قطع الغيار</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count3 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="oilandgrace">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 4 ?>"> القسم :مشتقات الزيوت والشحوم</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count4 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="safetytool">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 5 ?>"> القسم :معدات وادوات السلامة</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count5 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="instrumenttool">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 7 ?>"> القسم :معدات ونظم الاغلاق</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count6 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>



						<div class="col-lg-12" id="electrictool">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 6 ?>"> القسم :معدات وادوات كهربائية</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
                                        <p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count7 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-12" id="analyzertool">
							<div class="feat_property list">
								<div class="thumb">
									<img class="img-whp" src="images/property/fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="dtls_headr">
											<ul class="tag">
									
												<li class="list-inline-item"><a href="#">متوفر</a></li>
											</ul>
											<a class="fp_price" href="shop.php?id=<?php echo 8 ?>"> القسم :معدات وادوات نظم التحليل</a>
											
										</div>
									

										<p class="text-thm"><span class="flaticon-user"></span> عدد الموردين : 3</p>
										<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count8 ?></p>
                                       

										<ul class="prop_details mb0">
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> اخر تحديث: منذ يومين </div>
									</div>
								</div>
							</div>
						</div>

			 

										
								
					
						<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item disabled">
								    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
								    </li>
								    <li class="page-item active" aria-current="page"><a class="page-link" href="#"> <span class="sr-only">(current)</span> 1</a>
							     	</li>
								    <li class="page-item" >
								    	<a class="page-link" href="#">2 </a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">30</a></li>
								    <li class="page-item">
								    	<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
								    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include "inc/footar.php" ?>