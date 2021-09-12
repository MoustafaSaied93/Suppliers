


<?php 

include_once("../config.php");

if(isset($_POST['productid']))
{

    $productid=$_POST['productid'];
    


    $query= mysqli_query($conn,"SELECT * FROM productreviews WHERE product_id ='$productid'
    
     ");

                               echo'
                                <div class="mbp_pagination_comments">
										<ul class="total_reivew_view">
											
										
										
											
										</ul>';

									
										
										while($row1 = mysqli_fetch_array($query))
                                        {
                                         echo'
										<div class="mbp_first media">
											<img src="images/user/user.png" class="mr-3" alt="1.png">
											<div class="media-body">
										    	<h4 class="sub_title mt-0">'.$row1['C_Name'].'
													<div class="sspd_review dif">
														<ul>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
															
														</ul>
													</div>
										    	</h4>
										    	
										    	<p class="mt10">'.$row1['Description'].'</p>
											</div>
										</div>
										<div class="custom_hr"></div>
										
										<div class="custom_hr"></div>';
                                        }
                                        
										

                                      
                                       echo'
										
										<div class="mbp_comment_form style2">
											<h4 style="float:right;">قيم المنتج</h4>
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
												<li class="list-inline-item review_rating_para">درجة تقيمك للمنتج</li>
											</ul>
											<form class="comments_form">
												<div class="form-group">
												<input type hidden id="p-ids" value="'.$productid.'" >
											    	<input type="text" class="form-control" id="exampleInputName1" aria-describedby="textHelp" placeholder="ادخل اسمك">
												</div>
												<div class="form-group">
												    <textarea class="form-control" id="exampleFormControlTextarea1" rows="12" placeholder="اكتب الملاحظات"></textarea>
												</div>
												<button type="submit" onclick="ReviewProduct()" class="btn btn-thm">سجل تقيمك <span class="flaticon-right-arrow-1"></span></button>
											</form>
										</div>
										
									</div>';


    
    
}

?>