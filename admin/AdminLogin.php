<?php


?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="../images/property/pposter1.png">

		<!-- Title -->
		<title>منصة تجار</title>

		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css\bootstrap.min.css">

		<!-- Master CSS -->
		<link rel="stylesheet" href="css\main.css">

		<link rel="stylesheet" href="css\toastr.min.css">

	</head>

	<body class="authentication" style="background: #e1e4f4;">

		<!-- Container start -->
		<div class="container" >
			
		<h2 style="text-align:center">منصة تجار </h2>
			<form action="#" method="post">
				<div class="row justify-content-md-center">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
						<div class="login-screen">
							<div class="login-box">
							<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="../images/property/pposter1.png" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><h3 href="#">تجار</h3></li>
							</ul>

							<br> <br><br><br><br>

							
								<div class="form-group">
									<input type="text" id="EMAIL" class="form-control" placeholder="ادخل البريد الالكترونى">
								</div>
								<br>
								<div class="form-group">
									<input type="password" id="PASSWORD" class="form-control" placeholder="ادخل كلمة المرور">
								</div>
								<br>
								<div class="actions mb-4" >
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="remember_pwd">
									</div>
									<button type="submit" id="Signin" class="btn btn-primary">تسجيل الدخول</button>
								</div>


							</div>
						</div>
					</div>
				</div>
			</form>

		</div>
		<!-- Container end -->

	</body>
</html>


<script src="js\jquery.min.js"></script>
 <script src="js\toastr.min.js"></script>
<script>

$('#Signin').on('click', function(event){
  

  var formData = new FormData();
  event.preventDefault();
  
  
   
  var Email=$("#EMAIL").val();
  
  var password=$("#PASSWORD").val();
  
  
  
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
  
  
   if(Email=="")
  {
  
   $("#EMAIL").focus();
   return false;
  }
  
  else if(!regex.test(Email)){  
  toastr.error("ادخل بريد الكترونى صحيح");  
  $("#EMAIL").focus();
  
  return false;
  
  }
  
  else if(password=="")
  {
   $("#PASSWORD").focus();
  
   return false;
  }
  var page="AdminLogin";
  
  formData.append("password", password);
  formData.append("Email", Email);
  formData.append("page", page);
  
  $.ajax({
  url:"../sharefunction/login.php",
  method:"POST",
  data: formData,
  processData: false,
  contentType: false,
  success:function(data){ 
  
  if(data==202) 
  {
  toastr.error("يوجد خطا فى البريد الالكترونى او كلمة المرور");
  $("#Email").focus();
   return false;      
  }
  
  
  else if(data==201) 
  {
  toastr.error("عذرا يوجد مشكلة ما فى حسابك ");
  $("#Email").focus();
   return false;      
  }
  
  
  else if(data==204)
  {
  
  window.location = "index.php";
  
  
  }
  
  
  }  
   
  
  
  });
  });


	
</script>
