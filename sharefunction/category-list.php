<?php 
include("inc/header.php");

include_once("config.php");

$id = $_GET['id'];





?>



<main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/Safety-Equipment-Theforbiz.jpg')">
        		<div class="container">
        			<h1 class="page-title">We are glad to have you visit
                        <?php
                        if($id==1)
                        {
                            echo' <span>industrial equipment</span></h1>';
                        }
                        else if($id==2)
                        {
                            echo' <span>industrial tools</span></h1>';

                        }

                        else if($id==3)
                        {
                            echo' <span>Spare parts</span></h1>';

                        }

                        else if($id==4)
                        {
                            echo' <span>oil and greases</span></h1>';

                        }

                        else if($id==5)
                        {
                            echo' <span>Safety tools and equipments</span></h1>';

                        }


						else if($id==6)
                        {
                            echo' <span>Electrical tools and equipments</span></h1>';

                        }


						else if($id==7)
                        {
                            echo' <span>Instrument tools and equipments</span></h1>';

                        }


						else if($id==8)
                        {
                            echo' <span>Analyzer Devices and Tools</span></h1>';

                        }






           
            ?>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <?php
                        if($id==1)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> industrial equipment </a></li>';
                        }
                        else if($id==2)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> industrial tools </a></li>';

                        }

                        else if($id==3)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> Spare parts </a></li>';

                        }

                        else if($id==4)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> oil and greases </a></li>';

                        }


                        else if($id==5)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> safety tools and equipments </a></li>';

                        }

						else if($id==6)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> Electrical tools and equipments </a></li>';

                        }

						else if($id==7)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> Instrument tools and equipments </a></li>';

                        }

						else if($id==8)
                        {
                            echo' <li class="breadcrumb-item"><a href="#"> Analyzer Devices and Tools </a></li>';

                        }



           
                        ?>

                        
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->


               <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                			<div class="toolbox">
                				<div class="toolbox-left">
                					<div class="toolbox-info">
                						Showing <span>9 of 56</span> Products
                					</div><!-- End .toolbox-info -->
                				</div><!-- End .toolbox-left -->

                				<div class="toolbox-right">
                					<div class="toolbox-sort">
                						<label for="sortby">Sort by:</label>
                						<div class="select-custom">
											<select name="sortby" id="sortby" class="form-control">
												<option value="popularity" selected="selected">Most Popular</option>
												<option value="rating">Most Rated</option>
												<option value="date">Date</option>
											</select>
										</div>
                					</div><!-- End .toolbox-sort -->
                					<div class="toolbox-layout">
                						<a href="category-list.html" class="btn-layout active">
                							<svg width="16" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="10" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="10" height="4" />
                							</svg>
                						</a>

                						<a href="category-2cols.html" class="btn-layout">
                							<svg width="10" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                							</svg>
                						</a>

                						<a href="category.html" class="btn-layout">
                							<svg width="16" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="12" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                								<rect x="12" y="6" width="4" height="4" />
                							</svg>
                						</a>

                						<a href="category-4cols.html" class="btn-layout">
                							<svg width="22" height="10">
                								<rect x="0" y="0" width="4" height="4" />
                								<rect x="6" y="0" width="4" height="4" />
                								<rect x="12" y="0" width="4" height="4" />
                								<rect x="18" y="0" width="4" height="4" />
                								<rect x="0" y="6" width="4" height="4" />
                								<rect x="6" y="6" width="4" height="4" />
                								<rect x="12" y="6" width="4" height="4" />
                								<rect x="18" y="6" width="4" height="4" />
                							</svg>
                						</a>
                					</div><!-- End .toolbox-layout -->
                				</div><!-- End .toolbox-right -->
                			</div><!-- End .toolbox -->


                           
                            <div class="products mb-3">

                            <?php 

                            if($id==1)
                            {

                                $query2= mysqli_query($conn,"SELECT * from product where cat_id='8' AND Accept='1'
                                ");
  


                            }

                            else if($id==2)

                            {
                            $query2= mysqli_query($conn,"SELECT * from product where cat_id='10' AND Accept='1'
                            ");




                            }

                            else if($id==3)

                            {
                            $query2= mysqli_query($conn,"SELECT * from product where cat_id='11' AND Accept='1'
                            ");
                            }


                            else if($id==4)

                              {
                            $query2= mysqli_query($conn,"SELECT * from product where cat_id='12' AND Accept='1'
                               ");




                            }

                            else if($id==5)

                            {
                          $query2= mysqli_query($conn,"SELECT * from product where cat_id='13' AND Accept='1'
                             ");
							}


                        else if($id==6)

                         {
                          $query2= mysqli_query($conn,"SELECT * from product where cat_id='15' AND Accept='1'
                        ");
						 }

                else if($id==7)

                     {
                 $query2= mysqli_query($conn,"SELECT * from product where cat_id='14' AND Accept='1'
                    ");
  



                          }

						  else if($id==8)

						  {
					  $query2= mysqli_query($conn,"SELECT * from product where cat_id='16' AND Accept='1'
						 ");
	   
	 
	 
	 
							   }
                             

                            
                          while($row = mysqli_fetch_array($query2))
                               {
                              echo'


                                <div class="product product-list">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <figure class="product-media">
                                                
                                                <a href="productinfo.php?id='. $row['product_id'].'">
                                                    <img src="../sapplier/images/products/'.$row['image1'].'" alt="Product image" class="product-image">
                                                </a>
                                            </figure><!-- End .product-media -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-6 col-lg-3 order-lg-last">
                                            <div class="product-list-action">
                                              
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                   
                                                </div><!-- End .rating-container -->

                                                <div class="product-action">
                                                 
                                                 
                                                </div><!-- End .product-action -->

                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-list-action -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-lg-6">
                                            <div class="product-body product-action-inner">
                                                
                                                <div class="product-cat">
                                             
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="productinfo.php?id='. $row['product_id'].'">'.$row['Product_Name'].'</a></h3><!-- End .product-title -->

                                                <div class="product-content">
                                                    <p>'.$row['Descrip'].' </p>
                                                </div><!-- End .product-content -->
                                                
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .product -->

                             
                                ';
                               }
                               ?>

                            </div><!-- End .products -->

                           

                			<nav aria-label="Page navigation">
							    <ul class="pagination">
							        <li class="page-item disabled">
							            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
							                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
							            </a>
							        </li>
							        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
							        <li class="page-item"><a class="page-link" href="#">2</a></li>
							        <li class="page-item"><a class="page-link" href="#">3</a></li>
							        <li class="page-item-total">of 6</li>
							        <li class="page-item">
							            <a class="page-link page-link-next" href="#" aria-label="Next">
							                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
							            </a>
							        </li>
							    </ul>
							</nav>
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-clean">
                					<label>Filters:</label>
                					<a href="#" class="sidebar-filter-clear">Clean All</a>
                				</div><!-- End .widget widget-clean -->

                				<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Category Type
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">

                                            <?php

                                            if($id==1)
                                            {
                                                echo '<div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-1">
                                                    <label class="custom-control-label" for="cat-1">Pumps</label>
                                                </div><!-- End .custom-checkbox -->
                                                
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-2">
                                                    <label class="custom-control-label" for="cat-2">Motors</label>
                                                </div><!-- End .custom-checkbox -->
                                                
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-3">
                                                    <label class="custom-control-label" for="cat-3">Gairbox</label>
                                                </div><!-- End .custom-checkbox -->
                                            
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-4">
                                                    <label class="custom-control-label" for="cat-4">Pipes</label>
                                                </div><!-- End .custom-checkbox -->
                                                
                                            </div><!-- End .filter-item -->

                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cat-5">
                                                    <label class="custom-control-label" for="cat-5">Tanks</label>
                                                </div><!-- End .custom-checkbox -->
                                                
                                            </div><!-- End .filter-item -->
                                                
                                                
                                                
                                                
                                                
                                                ';





                                            }

                                            else if($id==2)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">hydrolic tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">Hand Tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-3">
														<label class="custom-control-label" for="cat-3">Measuring tools</label>
													</div><!-- End .custom-checkbox -->
												
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-4">
														<label class="custom-control-label" for="cat-4">Power Tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-5">
														<label class="custom-control-label" for="cat-5">penumeting tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->
                                                
                                                
                                                ';




                                            }


                                            else if($id==3)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Rotate</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">Stationary</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->


												
                                                
                                                
                                                ';




                                            }

                                            else if($id==4)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Oils</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">greases</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->											
                                                
                                                
                                                ';

                                            }

                                            else if($id==5)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">safety tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">safety equipments</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->											
                                                
                                                
                                                ';

                                            }


											else if($id==6)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Electrical tools</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">Electrical Equipments</label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->											
                                                
                                                
                                                ';

                                            }


											else if($id==7)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Instrument tools </label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">Instrument Equipments </label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->											
                                                
                                                
                                                ';

                                            }


											else if($id==8)
                                            {
                                                echo'
                                                <div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-1">
														<label class="custom-control-label" for="cat-1">Analyzer Devices </label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="cat-2">
														<label class="custom-control-label" for="cat-2">Analyzer Equipments </label>
													</div><!-- End .custom-checkbox -->
													
												</div><!-- End .filter-item -->											
                                                
                                                
                                                ';

                                            }

                                            ?>
											

											
										
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                        Product Warranty
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-2">
										<div class="widget-body">
											<div class="filter-items">
												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-1">
														<label class="custom-control-label" for="size-1">1 year</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-2">
														<label class="custom-control-label" for="size-2">2 year</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input"  id="size-3">
														<label class="custom-control-label" for="size-3">3 year</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input"  id="size-4">
														<label class="custom-control-label" for="size-4">4 year</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-5">
														<label class="custom-control-label" for="size-5">5 year</label>
													</div><!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="size-6">
														<label class="custom-control-label" for="size-6">6 year</label>
													</div>
                                                    
                                                    
                                                    <!-- End .custom-checkbox -->
												</div><!-- End .filter-item -->
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						
        					
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->









<?php 
include("inc/footer.php");
?>