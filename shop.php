<?php

include "inc/header.php";

include_once("config.php");

$id = $_GET['id'];



if($id==1)
{

	$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
	FROM product p INNER JOIN
		 categories c
		 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='8' AND p.Accept='1'
	");


$count = mysqli_num_rows($query2);



}

else if($id==2)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='10' AND p.Accept='1'
");

$count = mysqli_num_rows($query2);


}

else if($id==3)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID  where p.cat_id='11' AND p.Accept='1'
");
$count = mysqli_num_rows($query2);

}


else if($id==4)

  {
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='12' AND p.Accept='1'
   ");

$count = mysqli_num_rows($query2);


}

else if($id==5)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='13' AND p.Accept='1'
 ");
 $count = mysqli_num_rows($query2);
}


else if($id==6)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='15' AND p.Accept='1'
");
$count = mysqli_num_rows($query2);
}

else if($id==7)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='14' AND p.Accept='1'
");

$count = mysqli_num_rows($query2);

}

else if($id==8)

{
$query2= mysqli_query($conn,"SELECT p.*, c.*,a.*
FROM product p INNER JOIN
	 categories c
	 ON p.cat_id = c.cat_id  INNER JOIN accounts a  ON p.UserID  = a.UserID where p.cat_id='16' AND p.Accept='1'
");


 }
 $count = mysqli_num_rows($query2);
?>


<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#"style="text-align: right;">الرئيسية</a></li>
							<?php
							if($id=="1")
							{
								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم : المعدات الصناعية</li>
								</ol>
						      
								
								';
							}

							else if($id=="2")
							{

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم : الادوات لصناعية</li>
								</ol>
						      
								
								';


							}


							else if($id=="3")
							{

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم : قطع الغيار</li>
								</ol>
						      
								
								';


							}


							else if($id=="4")
							{

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم : مشتقات الزيوت والشحوم</li>
								</ol>
						      
								
								';


							}


							else if($id=="5")
							{ 

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم : معدات وادوات السلامة</li>
								</ol>
						      
								
								';


							}


							else if($id=="6")
							{ 

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم :معدات وادوات كهربائية</li>
								</ol>
						      
								
								';


							}

							else if($id=="7")
							{ 

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم :معدات ونظم الاغلاق الهوائية</li>
								</ol>
						      
								
								';


							}

							else if($id=="8")
							{ 

								echo'  <li class="breadcrumb-item active" aria-current="page" style="text-align: right;">قسم :معدات وادوات نظم التحليل الصناعى</li>
								</ol>
						      
								
								';


							}

						
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Listing Grid View -->
<section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="listing_sidebar">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Status</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2 w100">
												    <div class="pricing_acontent">
														<!-- <input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div> -->
												    	<span id="slider-range-value1"></span>
														<span class="mt0" id="slider-range-value2"></span>
													    <div id="slider"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Garages</option>
														<option>Yes</option>
														<option>No</option>
														<option>Others</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Year built</option>
														<option>2013</option>
														<option>2014</option>
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
													</select>
												</div>
											</div>
										</li>
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										<li>
										  	<div id="accordion" class="panel-group">
											    <div class="panel">
											      	<div class="panel-heading">
												      	<h4 class="panel-title">
												        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
												        </h4>
											      	</div>
												    <div id="panelBodyRating" class="panel-collapse collapse">
												        <div class="panel-body row">
												      		<div class="col-lg-12">
												                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label" for="customCheck4">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2">
																			<label class="custom-control-label" for="customCheck2">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
												                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14">
																			<label class="custom-control-label" for="customCheck14">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9">
																			<label class="custom-control-label" for="customCheck9">Washer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8">
																			<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												        </div>
												    </div>
											    </div>
											</div>
										</li>
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
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
				<div class="col-md-8 col-lg-6">
					<div class="breadcrumb_content style2">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
							<?php
							if($id=="1")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">المعدات الصناعية </li>';
							}

							else if($id=="2")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">الادوات الصناعية </li>';


							}

							else if($id=="3")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">قطع الغيار </li>';


							}


							else if($id=="4")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">مشتقات الزيوت والشحوم </li>';


							}

							else if($id=="5")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">معدات وادوات السلامة </li>';


							}

							else if($id=="6")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">معدات وادوات كهربائية </li>';


							}

							else if($id=="7")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">معدات وادوات نظم الاغلاق الهوائية </li>';


							}

							else if($id=="8")
							{
								echo' <li class="breadcrumb-item active text-thm" aria-current="page" style="text-align: right;">معدات وادوات نظم التحليل الصناعى </li>';


							}
						   
							?>
						</ol>
						<h2 class="breadcrumb_title" style="text-align: right;">عرض جميع المنتجات</h2>
					</div>
				</div>
<!--
				<div class="col-md-4 col-lg-6">
					<div class="sidebar_switch text-left">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn"> الفلترة</span>
						</div>
					</div>
				</div>
			</div>

			-->


			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="grid_list_search_result style2">
							<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
								<div class="left_area">
									

									<p class="text-thm"><span class="flaticon-box"></span> عدد المنتجات : <?php echo $count ?> منتج</p>
								</div>
							</div>
						
						</div>
					</div>

					
					<div class="row">

                    <?php
					  while($row = mysqli_fetch_array($query2))
					  {
					 echo'

						<div class="col-md-6 col-lg-4">
							<div class="feat_property home7 style4">
								<div class="thumb">
									<div class="fp_single_item_slider">
									
										<div class="item">
											<img class="img-whp" src="images/products/'.$row['image1'].'" alt="">
										</div>
									</div>
									<div class="thmb_cntnt style2">
										<ul class="tag mb0">
											
											<li class="list-inline-item"><a href="#">متوفر</a></li>
										</ul>
									</div>
									<div class="thmb_cntnt style3">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">'.$row['Price'].'<small> ريال</small></a>
										
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">'.$row['Product_Name'].'</p>
										
										<p><span class="flaticon-placeholder"></span> السعودية-'.$row['City'].'</p>
										<ul class="prop_details mb0"style="text-align: right;">
										
											<li class="list-inline-item" ><a href="#">رقم القطعة: '.$row['PartNumber'].' </a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">تجار</a></li>
										</ul>
										<div class="fp_pdate float-right"> منذ:يومين</div>
									</div>
								</div>
							</div>
						</div>
						';
					  }



						?>						
					
					
						<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item disabled">
								    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
								    </li>
								    <li class="page-item active">
										<a class="page-link" aria-current="page" href="#">1 <span class="sr-only">(current)</span></a>
								</li>
								    <li class="page-item " >
								    	<a class="page-link" href="#">2 </a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">29</a></li>
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