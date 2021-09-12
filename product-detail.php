

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

$Price=$row['Price'];

$PartNumber=$row['PartNumber'];

$UserID=$row['UserID'];

$ProductDesc=$row['Descrip'];

$suppcode=$row['CompanyCode'];
$city=$row['City'];







$query3= mysqli_query($conn,"SELECT * FROM productreviews WHERE product_id ='$id'
    
");











?>






	<!-- Shop Single Content -->
	<section class="shop-single-content bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content style2">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="index.php">الرئيسية</a></li>
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
												<div class="thumb"><img class="img-fluid" src="images/products/<?php echo $image1 ?>"></div>
											</div>
											<a class="product_popup popup-img" href="images/products/<?php echo $image1 ?>"><span class="flaticon-zoom-in"></span></a>

											
											<input type="hidden" id="imgshow" value="<?php echo $image1 ?>">

											<input type="hidden" id="imgshow2" value="<?php echo $image2 ?>">

											<input type="hidden" id="imgshow3" value="<?php echo $image1 ?>">
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="sps_content">
									<div class="thumb">
										<div class="single_product">
											<div class="single_item">
												<div class="thumb"><img class="img-fluid" src="images/products/<?php echo $image1 ?>"></div>
											</div>
											<a class="product_popup popup-img" href="images/products/<?php echo $image1 ?>"><span class="flaticon-zoom-in"></span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="sps_content">
									<div class="thumb">
										<div class="single_product">
											<div class="single_item">
												<div class="thumb"><img class="img-fluid" src="images/products/<?php echo $image1 ?>"></div>
											</div>
											<a class="product_popup popup-img" href="images/products/<?php echo $image1 ?>"><span class="flaticon-zoom-in"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="sps_content">
								<div class="content">
									<div class="shop_single_product_details">
										<h4 class="title"><?php echo $productname  ?> </h4>
										<div class="sspd_price mb25">السعر  : <?php echo $Price  ?>  ريال</div>

										<div class="sspd_price mb25">رقم القطعة : <?php echo $PartNumber  ?> </div>

										<div class="sspd_price mb25">كود المورد : <?php echo $suppcode ?> </div>

										<p><span class="flaticon-placeholder"></span> السعودية -<?php echo $city  ?></p>

										
							
										<ul class="cart_btns ui_kit_button mb20">
											<li class="list-inline-item"><input placeholder="5" type="number"></li>
											<li class="list-inline-item"><button type="button" class="btn"><span class="flaticon-shopping-bag pr5 fz20"></span> اضافة الي السلة</button></li>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="shop_single_tab_content mt30">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
							    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">وصف المنتج</a>
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
										    	<p class="mb25"> <?php echo $ProductDesc  ?></p>
										    	
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
								<div class="product_single_content" id="reviews">
								<input type hidden id="p-id" value="<?php echo $id?>" >

								
									
								</div>
							</div>
						</div>
					</div>
                    <br>


					<div class="shop_single_tab_content mt30">


					<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">مواصفات المنتج</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<?php
											if($row['PartNumber']!="")
											{
												echo'<li><p>رقم القطعة :</p></li>';
											}

											if($row['Product_Warranty']!="")
											{
												echo'<li><p>فترة الضمان :</p></li>';
											}

											if($row['Measurement_type']!="")
											{
												echo'<li><p>نوع القياس :</p></li>';
											}

											if($row['Lengths']!="")
											{
												echo'<li><p>الطول :</p></li>';
											}

											if($row['Width']!="")
											{
												echo'<li><p>العرض :</p></li>';
											}

											?>
										</ul>
										<ul class="list-inline-item">
											<?php
											if($row['PartNumber']!="")
											{
												echo'<li><p> '.$row['PartNumber'].'  </p></li>';

											}

											
											if($row['Product_Warranty']!="")
											{
												echo'<li><p> '.$row['Product_Warranty'].' سنة </p></li>';

											}

											if($row['Measurement_type']!="")
											{
												echo'<li><p> '.$row['Measurement_type'].' </p></li>';

											}

											if($row['Lengths']!="")
											{
												echo'<li><p> '.$row['Lengths'].' </p></li>';

											}

											if($row['Width']!="")
											{
												echo'<li><p> '.$row['Width'].' </p></li>';

											}
									
										?>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<?php
											if($row['Diameter']!="")
											{
												echo'<li><p>القطر الداخلى :</p></li>';

											}

											if($row['Out_Side_Diameter']!="")
											{
												echo'<li><p>القطر الخارجى:</p></li>';

											}

											if($row['wieght']!="")
											{
												echo'<li><p> وزن المنتج:</p></li>';

											}

											if($row['Size']!="")
											{
												echo'<li><p> الحجم :</p></li>';

											}

											if($row['Hieght']!="")
											{
												echo'<li><p> الارتفاع :</p></li>';

											}

											?>
										</ul>
										<ul class="list-inline-item">

										<?php
										if($row['Diameter']!="")
										{
											echo'<li><p> '.$row['Diameter'].' </p></li>';

										}

										if($row['Out_Side_Diameter']!="")
										{
											echo'<li><p> '.$row['Out_Side_Diameter'].' </p></li>';

										}

										if($row['wieght']!="")
										{
											echo'<li><p> '.$row['wieght'].' </p></li>';

										} 

										if($row['Size']!="")
										{
											echo'<li><p> '.$row['Size'].' </p></li>';

										} 

										if($row['Hieght']!="")
										{
											echo'<li><p> '.$row['Hieght'].' </p></li>';

										} 
										
										?>
										</ul>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4">
										<ul class="list-inline-item">
											<?php
											if($row['Motorpower']!="")
											{
												echo'<li><p> قوة المحرك : </p></li>';
	
											} 

											if($row['Voltage']!="")
											{
												echo'<li><p> الجهد الكهربى : </p></li>';
	
											} 
										  
										

											?>
										</ul>
										<ul class="list-inline-item">
										<?php
										if($row['Motorpower']!="")
										{
											echo'<li><p>'.$row['Motorpower'].' </p></li>';

										} 

										if($row['Voltage']!="")
										{
											echo'<li><p>'.$row['Voltage'].' </p></li>';

										} 
									
										
										?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-lg-12">
							<div class="property_attachment_area">
								<h4 class="mb30">مستندات المنتج</h4>
								<div class="iba_container style2">
									<div class="icon_box_area style2">
										<div class="score"><span class="flaticon-document text-thm fz30"></span></div>
										<div class="details">
										<a href="Files/<?php echo $row['AttachFile'];?>" download><?php echo $row['AttachFile'];?></a>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						</div>

                       <br><br>

                    
					<div class="row mb30">
						<div class="col-lg-12" >
							<h4 class="main-title text-center mb40">ربما يعجبك ايضا</h4>
						</div>

						<?php

                     $query2= mysqli_query($conn,"SELECT p.*, c.*, a.*
					 FROM product p INNER JOIN
					 accounts a
						  ON p.UserID = a.UserID INNER JOIN
						  categories c ON p.cat_id = c.cat_id 
                    where p.cat_id='$categoryid' AND p.product_id!='$id'  AND p.Accept='1'
					ORDER BY p.product_id  DESC LIMIT 3");

                      while($row = mysqli_fetch_array($query2))
                    {
                 	echo'


					 <div class="col-md-6 col-lg-4">
					 <div class="feat_property home7 style4">
						 <div class="thumb">
							 <div class="fp_single_item_slider">
							 
								 <div class="item">
								 <a href="product-detail.php?id='. $row['product_id'].'">
									 <img class="img-whp" src="images/products/'.$row['image1'].'" alt="">
								 </a>
								 </div>
							 </div>
							 <div class="thmb_cntnt style2">
								 <ul class="tag mb0">
									 
									 <li class="list-inline-item"><a href="#">متوفر</a></li>
								 </ul>
							 </div>
							 <div class="thmb_cntnt style3">
							
								 <a class="fp_price" href="product-detail.php?id='. $row['product_id'].'">'.$row['Price'].'<small> ريال</small></a>
								 
							 </div>
						 </div>
						 <div class="details">
							 <div class="tc_content">
							 <a href="product-detail.php?id='. $row['product_id'].'">	<p class="text-thm">'.$row['Product_Name'].'</p> </a>
								 
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
								 <div class="fp_pdate float-right"> منذ: يومين</div>
							 </div>
						 </div>
					 </div>
				 </div>';

					}

						?>
					


                   
					</div>
				</div>





				<div class="col-lg-4">
                <div class="terms_condition_widget">
						<h4 class="title">تواصل مع المورد</h4>
						<div class="widget_list">
					
						</div>
					</div>

                    			
					<div class="col-lg-12 col-xl-12 mt30">
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								
								<div class="media">
									<img class="mr-3" src="images/products/<?php echo $image1 ?>" width="40%" hieght="40%">
									<div class="media-body">
								    	<h5 class="mt-0 mb0"><?php echo $productname?></h5>
								    	<p class="mb0" >رقم القطعة :<?php echo $PartNumber?></p>
								    	<p><span class="flaticon-placeholder"></span>السعودية -<?php echo $city?></p>
								    	
										<p class="mb0" href="#">كود المورد :  <?php echo $suppcode?></p>
								  	</div>
								</div>
							</div>
							
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
										<input type hidden id="p-name" value="<?php echo $productname?>" >
										<input type hidden id="p-number" value="<?php echo $PartNumber?>" >
										<input type hidden id="p-UserID" value="<?php echo $UserID?>" >

								    	<input type="text" class="form-control" id="c-Name" placeholder=" الاسم">
								    </div>
								</li>
								
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="c-subject" placeholder="الموضوع">
								    </div>
								</li>
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="c_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="رجاء لا تدخل اي معلومات تحميل وسائل اتصال "></textarea>
		                            </div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="submit" onclick="SendExplantion()" class="btn btn-block btn-thm">ارسال</button>
									</div>
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



<script>

$(document).ready(function () {

	newUrl = 'product-detail.php';

history.pushState({}, null, newUrl);

function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
});

</script>