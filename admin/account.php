          <?php include("inc/header.php");?>
				<!-- Content wrapper start -->


					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-body">
									<div class="account-settings">
										<div class="user-profile">
											<div class="user-avatar">
												<img src="img\user.png" alt="Wafi Admin">
											</div>
											<h5 class="user-name">اسم المستخدم:محمد غريب </h5>
											<h6 class="user-email"> رقم الهوية : 0563421521 </h6>
												<h6 class="user-email">رقم الجوال: 056321454 </h6>
												<h6 class="user-email">  البريد الالكتروني : dfkjg@gmail.com </h6>
										</div>
										<div class="setting-links">
											<a href="">
												<i class="icon-chat"></i>
											الطلبات المرسلة
											</a>
											<a href="">
												<i class="icon-date_range"></i>
												الطلبات الواردة
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
							<div class="card h-100">
								<div class="card-header">
									<div class="card-title">Update Profile</div>
								</div>
								<div class="card-body">
									<div class="row gutters">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="fullName">Full Name</label>
												<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
											</div>
											<div class="form-group">
												<label for="eMail">Email</label>
												<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
											</div>
											<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
											</div>
											<div class="form-group">
												<label for="website">Website URL</label>
												<input type="url" class="form-control" id="website" placeholder="Website url">
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
											<div class="form-group">
												<label for="addRess">Address</label>
												<input type="text" class="form-control" id="addRess" placeholder="Enter Address">
											</div>
											<div class="form-group">
												<label for="ciTy">City</label>
												<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
											</div>
											<div class="form-group">
												<label for="sTate">State</label>
												<input type="text" class="form-control" id="sTate" placeholder="Enter State">
											</div>
											<div class="form-group">
												<label for="zIp">ZIP</label>
												<input type="number" class="form-control" id="zIp" placeholder="Website ZIP">
											</div>
										</div>
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="text-right">
												<button type="button" id="submit" name="submit" class="btn btn-dark">Cancel</button>
												<button type="button" id="submit" name="submit" class="btn btn-success">Submit Form</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->

<?php include("inc/footer.php");?>
